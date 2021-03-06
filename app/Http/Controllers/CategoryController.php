<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return category::all()->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $newCategory = new category(['title' => $request->get('title')]);

        $newCategory->save();
        return $newCategory->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $toUpdate = category::find($request->get('id'));
        if ($toUpdate) {
            $toUpdate->title = $request->get('title');
            $toUpdate->save();
            return $toUpdate->toJson();
        } else {
            return response()->json(['error' => "Not Found!"])->setStatusCode(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $toDelete = category::find($request->get('id'));
        $toDelete->delete();
        return $toDelete->toJson();
    }

    public function allData()
    {
        $categories = category::with(['products' => function ($query) {
            $query->with(['sizes' => function ($query) {
                $query->orderBy('measure');
                $query->with('price');
            }]);
        }])->get();
        // foreach ($categories as $category) {
        //     # code...
        //     $category=$category->products;
        //     foreach ($category as $product) {
        //         # code...
        //         $product=$product->sizes;

        //         foreach ($product as $size ) {
        //             $size=$size->price;
        //         }
        //     }
        // }

        return $categories->toJson();
    }
}
