<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function dashboardOverView()
    {
        return view('admin.layouts.dashboard');
    }

    public function usersLayout()
    {
        return view('admin.layouts.dashboard');
    }
}
