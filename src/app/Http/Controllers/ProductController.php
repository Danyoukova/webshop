<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\category;
use App\Models\categorySubcategory;
use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Models\productCategory;
use App\Models\subcategory;
use Database\Seeders\ProductSeeder;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class ProductController extends Controller
{


    public function indexProducts(): Factory|View|Application
    {
        //show only 8 products
        $products = product::all()->take(8);
        $allCategories = category::all();
        return view('homepage', compact('products', 'allCategories'));
    }


    public function getProductWithCategorySubcategory(): Factory|View|Application
    {
        $productsWithCategorySubcategory = product::join('product_categories as prCat', 'prCat.product_id', '=', 'products.id')
            ->join('category_subcategories as catSubcat', 'catSubcat.id', '=', 'prCat.category_subcategory_id')
            ->join('categories as c', 'c.id', '=', 'catSubcat.category_id')
            ->join('subcategories as sub', 'sub.id', '=', 'catSubcat.subcategory_id')
            ->get();

        $allCat = category::all();
        return view('productWithCatSubcat', compact('productsWithCategorySubcategory', 'allCat'));
    }

    public function category(): Factory|View|Application
    {
        $getCategory = category::join('category_subcategories', 'category_subcategories.category_id', '=', 'category_id')
            ->join('subcategories', 'subcategory_id', '=', 'category_subcategories.category_id')
            ->join('product_categories', 'product_categories.category_subcategory_id', '=', 'category_subcategories.id')
            ->get(['category_name', 'subcategory_name', 'category_id']);
        return view('test', compact('getCategory'));
    }


    public function getProduct(string $id): Factory|View|Application
    {
        $product = product::where('id', $id)->first();
        return view('productWithCatSubcat', compact('product'));
    }


    public function index()
    {

      //  return ProductResource::collection(product::all());
      //  return product::all();
        $productsWithCategorySubcategory = product::join('product_categories as prCat', 'prCat.product_id', '=', 'products.id')
            ->join('category_subcategories as catSubcat', 'catSubcat.id', '=', 'prCat.category_subcategory_id')
            ->join('categories as c', 'c.id', '=', 'catSubcat.category_id')
            ->join('subcategories as sub', 'sub.id', '=', 'catSubcat.subcategory_id')
            ->get();


        return $productsWithCategorySubcategory;
    }

    public function products(){
        return   product::all()->take(8);
    }

    public function categories()
    {
        $allCategories = category::all();
        return $allCategories;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreproductRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request): Response
    {
        $product = new product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->save();

        return response(['data' => new ProductResource($product)], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function show($id): Response
    {
        //$product = product::where('id', $product)->first();
        $product = product::all()->find($id);
        return response($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateproductRequest $request
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, $id)
    {
        $product = product::all()->find($id);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
