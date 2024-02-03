<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function main()
    {
        $pageTitle = "Үндсэн цэс";

        return view('admin.menus.main', compact('pageTitle'));
    }

    public function store_main(Request $request)
    {
        
        return redirect()->back()->with('success', 'hi, bolson ho');
    }
}
