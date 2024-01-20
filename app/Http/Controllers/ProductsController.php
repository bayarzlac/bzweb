<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProductCategories;
use App\Models\ProductsToCategories;
use App\Models\Products;

use App\Exceptions\InvalidOrderException;

class ProductsController extends Controller
{
    public function index($id = null)
    {
        $pageTitle = 'Бараа, бүтээгдэхүүний бүртгэл';
        $rootCategories = ProductCategories::whereNull('parent_id')->get();
        $products = '';

        if ($id == null) {
            $products = Products::orderBy('created_at', 'DESC')->get();
        }
        else {
            $products = Products::join('products_to_categories', 'products_to_categories.product_id', '=', 'products.id')
                ->where('products_to_categories.product_category_id', '=', $id)
                ->orderBy('products.created_at', 'DESC')->get();
        }

        return view('admin.products.index', compact('pageTitle', 'rootCategories', 'products'));
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
        $rootCategories = ProductCategories::whereNull('parent_id')->get();

        return view('admin.products.new', compact('pageTitle', 'rootCategories'));
    }

    public function store(Request $request)
    {
        // $product = Products::where('title', '=', $request->title)->first();

        // if ($product) {
        //     return redirect()->back()->with('danger', 'Ийм нэртэй бараа, бүтээгдэхүүн бүртгэгдсэн байна.');
        // }

        // $product = Products::create([
        //     'title' => $request->title,
        //     'price' => $request->price, 
        //     'description' => $request->description
        // ]);

        // if ($product) {
        //     foreach ($request->categories as $key => $value) {
        //         ProductsToCategories::create([
        //             'product_id' => $product->id, 
        //             'product_category_id' => $value
        //         ]);
        //     }

        //     return redirect()->back()->with('success', 'bolson shuu gugshuun');
        // }
        // else {
        //     return redirect()->back()->with('warning', 'ee huurhii aldaa');
        // }

        $count = 0;

        foreach ($request->file('files') as $file) {
            $count += 1;
        }

        return $count;
    }
}