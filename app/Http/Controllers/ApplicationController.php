<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ApplicationController extends Controller
{
    public function create(): View
    {
        return view('applications.create');
    }
}