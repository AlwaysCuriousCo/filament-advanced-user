<?php

namespace AlwaysCurious\FilamentAdvancedUser\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlwaysCurious\FilamentAdvancedUser\FilamentAdvancedUser
 */
class FilamentAdvancedUser extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AlwaysCurious\FilamentAdvancedUser\FilamentAdvancedUser::class;
    }
}
