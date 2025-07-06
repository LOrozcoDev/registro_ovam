<?php

namespace App\Services;

class MenuBuilder
{
    public static function forUser($user)
    {
        $menu = [];

        foreach (config('menu.items') as $item) {
            if (
                (isset($item['roles']) && $user->hasAnyRole($item['roles'])) ||
                (isset($item['permission']) && $user->hasPermissionTo($item['permission']))
            ) {
                $menu[] = $item;
            }
        }
        return $menu;
    }
}
