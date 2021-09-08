<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return product::all()->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProduct = new product(['title' => $request->get('title'), 'desc' => $request->get('desc'), 'image' => $request->get('image'), 'category_id' => $request->get('category_id')]);
        $newProduct->save();
        return $newProduct->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $updateProduct = product::find($request->get('id'));

        if ($updateProduct) {
            $updateProduct->title = (($request->get('title'))?$request->get('title'):$updateProduct->title);
            // $updateProduct->title = $request->get('title');
            $updateProduct->desc = $request->get('desc');
            $updateProduct->image = $request->get('image');
            $updateProduct->category_id = $request->get('category_id');

            $updateProduct->save();
            return $updateProduct->toJson();
        } else {
            return response()->json(['error' => "Not Found!"])->setStatusCode(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

        $toDelete = product::find($request->get('id'));
        if ($toDelete) {
            $toDelete->delete();
            return $toDelete->toJson();
        } else {
            return response()->json(['error' => "Not Found!"])->setStatusCode(404);
        }
    }
}
