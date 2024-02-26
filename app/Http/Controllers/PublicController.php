<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MainMenu;
use App\Models\Posts;
use App\Models\PostCategories;

class PublicController extends Controller
{
    //
    public function index() 
    {
        $mainmenu = MainMenu::whereNull('parent_id')->orderBy('num')->get();

        return view('index', 'mainmenu');
    }

    public function menuPage($id)
    {
        $menuItem = MainMenu::where('id', $id)->first();

        return view('page', compact('menuItem'));
    }

    public function post($id)
    {
        $post = Posts::where('id', $id)->first();

        return view('post', compact('post'));
    }

    public function postCategory($id)
    {
        $category = PostCategories::where('id', $id)->first();

        return view('category', compact('category'));
    }
}
