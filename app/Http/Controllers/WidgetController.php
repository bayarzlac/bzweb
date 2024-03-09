<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Widget;

class WidgetController extends Controller
{
    //
    public function index() 
    {
        $pageTitle = 'Хэсгүүд';
        $widgets = Widget::orderBy('created_at')->get();


        return view('admin.widgets.index', compact('pageTitle', 'widgets'));
    }

    public function edit()
    {
        $pageTitle = 'Хэсэг нэмэх / засах';

        return view('admin.widgets.edit', compact('pageTitle'));
    }

    public function createOrUpdate(Request $request) 
    {
        if ($request->id) {
            $widget = Widget::find($request->id);

            $widget->widgetHtml = $request->widgetHtml;
            $widget->save();
        }
        else {
            $widget = Widget::create([
                'widgetHtml' => $request->widgetHtml
            ]);
        }


        return redirect()->back()->with('success', 'Хадгалагдлаа')->withErros('danger', 'Хадагалахад алдаа гарлаа');
    }
}

