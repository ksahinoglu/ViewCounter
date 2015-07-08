<?php

namespace Fraank\ViewCounter;
use Illuminate\Support\ServiceProvider;

class ViewCounterServiceProvider extends ServiceProvider {

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    include __DIR__.'/Http/routes.php';
    
    // add migration files to load via artisan vendor:publish
    $this->publishes([
      realpath(__DIR__.'/migrations') => $this->app->databasePath().'/migrations',
    ]);

  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    // Register events for view and like
    return array();
  }

}
