<?php

namespace App\Facades\Interfaces;

use Pecee\SimpleRouter\Route\IRoute;

// Limitation to HTTP verbs
interface Router
{
    public static function get(string $url, $callback, array $settings = null): IRoute;

    public static function post(string $url, $callback, array $settings = null): IRoute;

    public static function put(string $url, $callback, array $settings = null): IRoute;

    public static function patch(string $url, $callback, array $settings = null): IRoute;

    public static function delete(string $url, $callback, array $settings = null): IRoute;
}