<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\SubcategoryResource;
use App\Models\category;
use App\Models\subcategory;
use App\Http\Requests\StoresubcategoryRequest;
use App\Http\Requests\UpdatesubcategoryRequest;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
      //  return SubcategoryResource::collection(subcategory::all());

        $getCategory = category::join('category_subcategories', 'category_subcategories.category_id', '=', 'categories.id')
            ->join('subcategories', 'subcategories.id', '=', 'category_subcategories.subcategory_id')
            ->get(['category_name', 'category_id', 'subcategory_name', 'subcategory_id']);
        return $getCategory;
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
     * @param \App\Http\Requests\StoresubcategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresubcategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatesubcategoryRequest $request
     * @param \App\Models\subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesubcategoryRequest $request, subcategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\subcategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(subcategory $subcategory)
    {
        //
    }
}
