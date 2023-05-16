<?php

namespace Modules\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Core';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'core';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerProviders();
    }

    /**
     * Register providers
     *
     * @return void
     */
    protected function registerProviders(): void
    {
        $this->app->register("Modules\\Core\\Providers\\ModuleServiceProvider");
        $this->app->register("Modules\\Core\\Providers\\ModuleRouteServiceProvider");
    }
}
