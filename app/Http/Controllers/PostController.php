<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\PostCategories;
use App\Models\Posts;

class PostController extends Controller
{
    //
    public function categories()
    {
        $pageTitle = "Агуулгын ангилал";
        $rootCategories = PostCategories::whereNull('main_id')->get();
        $allCategories = PostCategories::get();

        return view('admin.posts.categories', compact('pageTitle', 'rootCategories', 'allCategories'));
    }

    public function store_category(Request $request)
    {
        $postCategory = PostCategories::create([
            'title' => $request->title, 
            'main_id' => $request->main_id
        ]);

        return redirect()->back()->with('success', 'Агуулгын ангилал нэмэгдлээ');
    }

    public function index() 
    {
        $pageTitle = "Нийт агуулгын жагсаалт";
        $posts = Posts::orderBy('created_at', 'DESC')->get();

        return view('admin.posts.index', compact('pageTitle', 'posts'));
    }

    public function new()
    {
        $pageTitle = "Шинэ агуулга";
        $rootCategories = PostCategories::whereNull('main_id')->get();

        return view('admin.posts.new', compact('pageTitle', 'rootCategories'));
    }

    public function store(Request $request)
    {
        $img_path = '';

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = substr(Str::uuid(), 0, 8) . '.jpg';
            $file->move(public_path('storage/headers'), $filename);

            $img_path = 'storage/headers/' . $filename;
        }

        $post = Posts::create([
            'title' => $request->title, 
            'header_img_path' => $img_path,
            'short' => $request->short,
            'content' => $request->content, 
            'user_id' => 1
        ]);

        return redirect()->back()->with('success', 'Агуулга бүртгэгдлээ');
    }
}
