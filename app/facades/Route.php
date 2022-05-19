<?php

namespace App\Facades;

use App\Facades\Interfaces\Router;
use Pecee\SimpleRouter\Route\IRoute;
use Pecee\SimpleRouter\SimpleRouter;

class Route implements Router
{
    public static function get(string $url, $callback, array $settings = null): IRoute
    {
        return SimpleRouter::get($url, $callback, $settings);
    }

    public static function post(string $url, $callback, array $settings = null): IRoute
    {
        return SimpleRouter::post($url, $callback, $settings);
    }

    public static function put(string $url, $callback, array $settings = null): IRoute
    {
        return SimpleRouter::put($url, $callback, $settings);
    }

    public static function patch(string $url, $callback, array $settings = null): IRoute
    {
        return SimpleRouter::patch($url, $callback, $settings);
    }

    public static function delete(string $url, $callback, array $settings = null): IRoute
    {
        return SimpleRouter::delete($url, $callback, $settings);
    }
}