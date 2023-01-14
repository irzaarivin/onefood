<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Toko;
use App\Models\Cart;

use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('restaurants', [
            'title' => 'Waroenk',
            'data' => Toko::latest()->filter(request(['search']))->get()
        ]);
    }

    public function checkoutCart(Request $request) {
        return view('checkout', [
            'cart' => $cart = Cart::where('id_owner', auth()->user()->id)->get()
        ]);
    }

    public function addCart(Request $request) {

        DB::table('carts')->insert([
            'id_owner' => $request->id_owner,
            'id_kuliner' => $request->id_kuliner,
            'nama' => $request->nama,
            'slug' => $request->slug,
            'toko' => $request->toko,
            'lokasi' => $request->lokasi,
            'thumb' => $request->thumb,
            'harga' => $request->harga
        ]);

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
