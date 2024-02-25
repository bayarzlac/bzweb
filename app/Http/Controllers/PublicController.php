<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MainMenu;

class PublicController extends Controller
{
    //
    public function index() 
    {
        $mainmenu = MainMenu::whereNull('parent_id')->orderBy('num')->get();

        return view('index', 'mainmenu');
    }
}
