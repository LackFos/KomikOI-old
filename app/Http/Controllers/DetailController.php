<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function __invoke()
    {
        return view("pages.detail")->with('metaTitle', 'Detail Page');
    }
}