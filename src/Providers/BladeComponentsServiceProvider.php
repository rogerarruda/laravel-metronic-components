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
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'components');
        $this->publishes([
            __DIR__ . '/../Resources/views' => resource_path('views/vendor/components')
        ], 'blade-components');

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
        Blade::component('blade-components::badge', 'badge');
        Blade::component('blade-components::modal', 'modal');
        Blade::component('blade-components::paginate', 'paginate');
        Blade::component('blade-components::portlet', 'portlet');

		Blade::component('blade-components::form.section', 'formsection');
		Blade::component('blade-components::form.layout', 'formlayout');

		Blade::component('blade-components::form.input', 'input');
		Blade::component('blade-components::form.textarea', 'textarea');
		Blade::component('blade-components::form.select', 'select');
		Blade::component('blade-components::form.option', 'option');
		Blade::component('blade-components::form.switch', 'switch');
		Blade::component('blade-components::form.checkbox', 'checkbox');
		Blade::component('blade-components::form.radio', 'radio');
    }
}
