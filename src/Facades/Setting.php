<?php

namespace Arafatkn\LaravelSettings\Facades;


use Illuminate\Support\Facades\Facade;

class Setting extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'settings';
    }
}