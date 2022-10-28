<?php

namespace Mintreu\LaravelSketch\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mintreu\LaravelSketch\LaravelSketch
 */
class LaravelSketch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mintreu\LaravelSketch\LaravelSketch::class;
    }
}
