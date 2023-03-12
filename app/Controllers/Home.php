<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('extend/extend', ['data' => 'AKU cinta ociiii']);
    }
}
