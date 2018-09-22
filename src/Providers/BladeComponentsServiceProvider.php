<?php

namespace RogerArruda\BladeComponents\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeComponentsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'metronic-components');
        $this->publishes([
            __DIR__ . '/../Resources/views' => resource_path('views/vendor/components')
        ], 'metronic-components');

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
        Blade::component('metronic-components::badge', 'badge');
        Blade::component('metronic-components::modal', 'modal');
        Blade::component('metronic-components::paginate', 'paginate');
        Blade::component('metronic-components::portlet', 'portlet');

		Blade::component('metronic-components::form.section', 'formsection');
		Blade::component('metronic-components::form.layout', 'formlayout');

		Blade::component('metronic-components::form.input', 'input');
		Blade::component('metronic-components::form.textarea', 'textarea');
		Blade::component('metronic-components::form.select', 'select');
		Blade::component('metronic-components::form.option', 'option');
		Blade::component('metronic-components::form.switch', 'switch');
		Blade::component('metronic-components::form.checkbox', 'checkbox');
		Blade::component('metronic-components::form.radio', 'radio');
    }
}
