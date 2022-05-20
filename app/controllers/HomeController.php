<?php

namespace App\Controllers;

class HomeController
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        view('home_page');
    }
}