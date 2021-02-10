<?php

namespace RogerArruda\LaravelMetronicComponents;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LaravelMetronicComponentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'metronic');
        $this->publishes([
            __DIR__ . '/Resources/views' => resource_path('views/vendor/components')
        ], 'metronic');

        $this->registerBladeComponents();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Register Blade components.
     *
     * @return void
     */
    public function registerBladeComponents()
    {
        Blade::component('metronic::badge', 'badge');
        Blade::component('metronic::modal', 'modal');
        Blade::component('metronic::paginate', 'paginate');
        Blade::component('metronic::portlet', 'portlet');

		Blade::component('metronic::form.section', 'formsection');
		Blade::component('metronic::form.layout', 'formlayout');

		Blade::component('metronic::form.input', 'input');
		Blade::component('metronic::form.textarea', 'textarea');
		Blade::component('metronic::form.select', 'select');
		Blade::component('metronic::form.option', 'option');
		Blade::component('metronic::form.switch', 'switch');
		Blade::component('metronic::form.checkbox', 'checkbox');
		Blade::component('metronic::form.radio', 'radio');
    }
}
