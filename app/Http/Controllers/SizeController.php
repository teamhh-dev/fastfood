<?php

namespace App\Http\Controllers;

use App\Models\size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return size::all()->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newSize=new size(['title' => $request->get('title'), 'measure' => $request->get('measure'), 'unit' => $request->get('unit'), 'product_id' => $request->get('product_id')]);
        $newSize->save();

        return $newSize->toJson();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\size  $size
     * @return \Illuminate\Http\Response
     */
    public function show(size $size)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $updateSize=size::find( $request->get('id'));
        if($updateSize)
        {

            $newSize=new size(['id' => $updateSize->id ,'title' => $request->get('title'), 'measure' => $request->get('measure'), 'unit' => $request->get('unit'), 'product_id' => $request->get('product_id')]);
            $updateSize->title=(($request->get('title'))?$request->get('title'):$updateSize->title);
            $updateSize->measure=(($request->get('measure'))?$request->get('measure'):$updateSize->measure);
            $updateSize->unit=(($request->get('unit'))?$request->get('unit'):$updateSize->unit);
            $updateSize->product_id=(($request->get('product_id'))?$request->get('product_id'):$updateSize->product_id);

            $updateSize->save();
            return $updateSize->toJson();
        }
        else
        {
            return response()->json(['error' => "Not Found!"])->setStatusCode(404);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $toDelete = size::find($request->get('id'));
        if ($toDelete) {
            $toDelete->delete();
            return $toDelete->toJson();
        } else {
            return response()->json(['error' => "Not Found!"])->setStatusCode(404);
        }
    }
}
