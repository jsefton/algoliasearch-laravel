<?php

namespace Jsefton\Laravel;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AlgoliaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerManager();

        Event::subscribe('\AlgoliaSearch\Laravel\EloquentSubscriber');
    }

    private function registerManager()
    {
        $this->app->register('Jsefton\Algolia\AlgoliaServiceProvider');
    }
}
