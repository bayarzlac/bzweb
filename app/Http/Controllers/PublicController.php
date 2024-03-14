<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\MainMenu;
use App\Models\Posts;
use App\Models\PostCategories;
use App\Models\ProductCategories;
use App\Models\Products;
use App\Models\ProductsToCategories;
use App\Models\ProductImages;


class PublicController extends Controller
{
    //
    public function index() 
    {
        $jsonPath = public_path('storage/homePage.json');

        if (File::exists($jsonPath)) {
            $jsonData = file_get_contents($jsonPath);
            $homePageData = json_decode($jsonData, true);

            return view('index', compact('homePageData'));
        }
        else {
            return response()->json(['error' => 'JSON file not found'], 404);
        }
    }

    public function menuPage($id = null)
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

    public function product($id)
    {
        $product = Products::find($id);
        $productImages = ProductImages::where('product_id', '=', $id)->get();

        return view('product', compact('product', 'productImages'));
    }

    public function products($id = null) 
    {
        $products = null;

        if ($id) {
            $products = Products::select('products.id', 'products.title', 'products.price', 'products.price_visibility', 'product_images.path', 'products.created_at')
                ->join('products_to_categories', 'products_to_categories.product_id', '=', 'products.id')
                ->join('product_images', 'product_images.product_id', '=', 'products.id')
                ->where('products_to_categories.product_category_id', $id)
                ->paginate(9);
        }
        else {
            $products = Products::select('products.id', 'products.title', 'products.price', 'products.price_visibility', 'products.created_at')
                ->join('products_to_categories', 'products_to_categories.product_id', '=', 'products.id')
                ->paginate(9);
        }

        return view('productCategory', compact('products'));
    }
}
