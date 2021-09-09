<?php

namespace App\Http\Controllers;

use App\Models\price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return price::all()->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPrice=new price(['price' => $request->get('price'), 'size_id' => $request->get('size_id')]);
        $newPrice->save();

        return $newPrice;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(price $price)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $toUpdate=price::find($request->get('id'));

        if($toUpdate)
        {
            $toUpdate->price=(($request->get('price'))?$request->get('price'):$toUpdate->price);
            $toUpdate->size_id=(($request->get('size_id'))?$request->get('size_id'):$toUpdate->size_id);
            $toUpdate->save();
            return $toUpdate->toJson();
        }
        else
        {
            return response()->json(['error' => "Not Found!"])->setStatusCode(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $toDelete = price::find($request->get('id'));
        if ($toDelete) {
            $toDelete->delete();
            return $toDelete->toJson();
        } else {
            return response()->json(['error' => "Not Found!"])->setStatusCode(404);
        }
    }
}
