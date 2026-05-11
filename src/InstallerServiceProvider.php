<?php

namespace Caydeesoft\Installer;

use Caydeesoft\Installer\Commands\InstallFeaturesCommand;
use Illuminate\Support\ServiceProvider;

class InstallerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->commands([
            InstallFeaturesCommand::class,
        ]);
    }
}
