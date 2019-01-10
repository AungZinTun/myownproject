<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductsRequest;
use App\Http\Requests\Admin\UpdateProductsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class ProductsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Product.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $categories = \App\ProductCategory::all();
        $tags = \App\ProductTag::all();

                $products = Product::all();

        return view('product.index', compact('products', 'categories', 'tags'));
    }

   
    public function show($id)
    {
                
        $categories =\App\ProductCategory::all();

        $tags = \App\ProductTag::all();

        $types = \App\Type::get()->pluck('title', 'id');
$orders = \App\Order::where('product_id', $id)->get();$likes = \App\Like::where('product_id', $id)->get();
$comments = \App\Comment::where('product_id', $id)
                        ->orderBy('created_at', 'desc')
                        ->get();
$downloads = \App\Download::where('product_id', $id)->get();

        $product = Product::findOrFail($id);

        return view('product.show', compact('product', 'orders', 'likes', 'comments', 'downloads', 'categories', 'tags'));
    }


    public function showcategory($id)
    {
     
        $categories = \App\ProductCategory::all();
        $tags = \App\ProductTag::all();
        $products = \App\Product::whereHas('category',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();

        $product_category = \App\ProductCategory::findOrFail($id);

        return view('product.category', compact('product_category', 'products', 'categories', 'tags'));
    }


    public function showtag($id)
    {
     
        $categories = \App\ProductCategory::all();
        $tags = \App\ProductTag::all();
        $products = \App\Product::whereHas('tag',
        function ($query) use ($id) {
            $query->where('id', $id);
        })->get();

$product_tag = \App\ProductTag::findOrFail($id);
        return view('product.tag', compact('product_tag', 'products', 'categories', 'tags'));
    }

}
