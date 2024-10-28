<?php

namespace Firdavsi\JwtAuth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Firdavsi\JwtAuth\JwtAuth
 */
class JwtAuth extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Firdavsi\JwtAuth\JwtAuth::class;
    }
}
