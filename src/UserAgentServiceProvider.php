<?php

namespace AingSh\Alexander\UserAgentParserHillel;

use App\Services\Geo\UserAgentService;
use Illuminate\Support\ServiceProvider;

class UserAgentServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserAgentInterface::class, function () {
            return new UserAgentService();
        });
    }

}
