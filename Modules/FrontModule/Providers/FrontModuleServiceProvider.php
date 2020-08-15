<?php

namespace Modules\FrontModule\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Modules\FrontModule\Helper\sharedData;

class FrontModuleServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(module_path('FrontModule', 'Database/Migrations'));


        $config =sharedData::getconfig();
        $companies = sharedData::getCompanies();
        $about  = sharedData::getAbout();
        $blogCategories = sharedData::getBlogCategory();
        view()->composer('*',function ($view) use ($config,$companies,$about,$blogCategories){

        $view->with('config',$config);
        $view->with('companies',$companies);
        $view->with('about',$about);
        $view->with('blogCategories',$blogCategories);

        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path('FrontModule', 'Config/config.php') => config_path('frontmodule.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('FrontModule', 'Config/config.php'), 'frontmodule'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/frontmodule');

        $sourcePath = module_path('FrontModule', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/frontmodule';
        }, \Config::get('view.paths')), [$sourcePath]), 'frontmodule');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/frontmodule');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'frontmodule');
        } else {
            $this->loadTranslationsFrom(module_path('FrontModule', 'Resources/lang'), 'frontmodule');
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(module_path('FrontModule', 'Database/factories'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
