<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Classes\Upload;

class UploadServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Upload', function () {
            return new Upload();
        });   //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
