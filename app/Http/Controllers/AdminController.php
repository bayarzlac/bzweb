<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function dashboard()
    {
        $pageTitle = "Хянах самбар";

        return view('admin.dashboard', compact('pageTitle'));
    }
}
