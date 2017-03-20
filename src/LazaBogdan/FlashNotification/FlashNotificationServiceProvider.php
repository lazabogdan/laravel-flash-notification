<?php 

namespace LazaBogdan\FlashNotification;

use Illuminate\Support\ServiceProvider;

class FlashNotificationServiceProvider extends ServiceProvider 
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../views', 'flash-notification');
    }

    /**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->singleton('flash-notification', function () {
            return $this->app->make('LazaBogdan\FlashNotification\FlashNotifier');
        });
	}

}
