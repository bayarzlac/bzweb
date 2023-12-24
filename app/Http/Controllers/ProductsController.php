<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProductCategories;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index() 
    {
        $pageTitle = 'Бараа, бүтээгдэхүүний бүртгэл';

        return view('admin.products.index', compact('pageTitle'));
    }

    public function categories($id = null)
    {
        $pageTitle = 'Бараа, бүтээгдэхүүний ангилал';
        $rootCategories = ProductCategories::whereNull('parent_id')->get();
        $allCategories = ProductCategories::get();

        return view('admin.products.categories', compact('pageTitle', 'rootCategories', 'allCategories'));
    }

    public function store_category(Request $request)
    {
        $category = ProductCategories::create([
            'num' => $request->num,
            'category' => $request->category, 
            'description' => $request->description, 
            'parent_id' => $request->parent_id
        ]);

        return redirect()->back()->with('success', 'yu yaachlaa');
    }

    public function new()
    {
        $pageTitle = 'Бараа, бүтээгдэхүүн';

        return view('admin.products.new', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        
        return $request;
    }
}
