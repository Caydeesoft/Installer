<?php

namespace Caydeesoft\InstallerFeatures;

use Caydeesoft\InstallerFeatures\Commands\InstallFeaturesCommand;
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
