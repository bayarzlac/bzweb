<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MainMenu;

class MenuController extends Controller
{
    //
    public function main()
    {
        $pageTitle = "Үндсэн цэс";
        $mainmenu = MainMenu::orderBy('num')->get();

        $menuItems = MainMenu::whereNull('parent_id')->orderBy('num')->get();

        return view('admin.menus.main', compact('pageTitle', 'menuItems', 'mainmenu'));
    }

    public function store_main(Request $request)
    {
        $menuItem = MainMenu::create([
            'num' => $request->num, 
            'title' => $request->title, 
            'description' => $request->description, 
            'parent_id' => $request->parent_id
        ]);

        return redirect()->back()->with('success', 'hi, bolson ho');
    }
}
