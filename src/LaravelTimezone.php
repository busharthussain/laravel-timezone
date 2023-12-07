<?php

namespace bushart\LaravelTimezone;
use Illuminate\Support\ServiceProvider;

class LaravelTimezone extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->commands([
            Timezone::class,
        ]);
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
