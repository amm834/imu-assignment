<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        return view('home_page', [
            'name' => "Mg Mg"
        ]);
    }
}