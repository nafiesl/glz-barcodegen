<?php
/*
 * This file is part of Pico Prime Barcode Generator.
 *
 * (c) Raff W <raff@picoprime.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PicoPrime\BarcodeGen;

use PicoPrime\BarcodeGen\BarcodeGenerator;
use Illuminate\Support\ServiceProvider;

class BarcodeGenServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('PicoPrime\BarcodeGen\BarcodeGenerator', function ($app) {
            return new BarcodeGenerator();
        });
    }
}