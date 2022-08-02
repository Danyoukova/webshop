<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\category;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use App\Models\product;
use App\Models\subcategory;

class CategoryController extends Controller
{

    public function index()
    {
//
        return CategoryResource::collection(category::all());
    }

    public function allCategories()
    {
        $allCategories = category::all();
        return view('test_subcat', compact('allCategories'));
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
     * @param \App\Http\Requests\StorecategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatecategoryRequest $request
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoryRequest $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}
