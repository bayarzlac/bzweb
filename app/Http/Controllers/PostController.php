<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PostCategories;
use App\Models\Posts;

class PostController extends Controller
{
    //
    public function categories()
    {
        $pageTitle = "Агуулгын ангилал";
        $rootCategories = PostCategories::whereNull('main_id')->get();

        return view('admin.posts.categories', compact('pageTitle', 'rootCategories'));
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
        $post = Posts::create([
            'title' => $request->title, 
            'category_id' => $request->category_id, 
            'content' => $request->content, 
            'user_id' => 1
        ]);

        return redirect()->back()->with('success', 'Агуулга бүртгэгдлээ');
    }
}
