<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductCategoriesRequest;
use App\Http\Requests\Admin\UpdateProductCategoriesRequest;

class ProductCategoriesController extends Controller
{
   
    public function show($id)
    {
     
        $products = \App\Product::whereHas('category',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();

        $product_category = ProductCategory::findOrFail($id);

        return view('product.category', compact('product_category', 'products'));
    }



}
