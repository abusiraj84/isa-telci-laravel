<?php

namespace App\Http\Controllers;

use App\Songs;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Songs::with('albums')->with('category')->with('yazar')->with('seslendiren')->paginate(20);


        // $songs = Songs::with('album')->with('category')->with('yazar')->with('seslendiren')->get();;
        // return response()->json($songs);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $product = new Songs();
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->save();
        // return response()->json('Ürün başarıyla eklendi.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $songs = Songs::find($id);
        return response()->json($songs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $product = Songs::find($id);
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->update();
        // return response()->json('Ürün başarıyla düzenlendi.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Songs::destroy($id);
        return response()->json('Ürün başarıyla silindi.');
    }
}
