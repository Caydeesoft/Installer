<?php
	
	namespace Caydeesoft\InstallerFeatures\Commands;
	
	use Illuminate\Console\Command;
	use Illuminate\Filesystem\Filesystem;
	
	class InstallFeaturesCommand extends Command
		{
			protected $signature = 'installer-features:install {--force : Overwrite existing files}';
			
			protected $description = 'Install Caydeesoft installer + plugin installer features into the host application';
			
			public function handle(Filesystem $files)
			: int
				{
					$packageRoot = dirname(__DIR__, 2);
					$stubRoot    = $packageRoot . '/stubs';
					
					if (!$files->isDirectory($stubRoot))
						{
							$this->error('Stub directory not found in package.');
							return self::FAILURE;
						}
					
					$force     = (bool)$this->option('force');
					$stubFiles = collect($files->allFiles($stubRoot));
					
					if ($stubFiles->isEmpty())
						{
							$this->warn('No stub files found to install.');
							return self::SUCCESS;
						}
					
					foreach ($stubFiles as $stubFile)
						{
							$stubPath       = $stubFile->getPathname();
							$relative       = ltrim(str_replace($stubRoot, '', $stubPath), DIRECTORY_SEPARATOR);
							$targetRelative = preg_replace('/\\.stub$/', '', $relative);
							$targetPath     = base_path($targetRelative);
							
							if ($files->exists($targetPath) && !$force)
								{
									$this->line("skip: {$targetRelative} (exists)");
									continue;
								}
							
							$files->ensureDirectoryExists(dirname($targetPath));
							$files->copy($stubPath, $targetPath);
							$this->info("installed: {$targetRelative}");
						}
					
					$this->newLine();
					$this->comment('Next steps:');
					$this->line('1. composer dump-autoload');
					$this->line('2. php artisan migrate');
					$this->line('3. php artisan optimize:clear');
					
					return self::SUCCESS;
				}
		}
