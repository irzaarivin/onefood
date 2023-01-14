<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Toko;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('foods', [
            'title' => 'Kulineran',
            'data' => Food::latest()->filter(request(['search']))->get()
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
    public function show(Food $food) {
        return view('foods-detail', [
            'title' => $food['nama'],
            'detail' => $food,
            'dataMakanan' => DB::table('food')->latest()->skip(0)->take(3)->get(),
            'dataToko' => DB::table('tokos')->latest()->skip(0)->take(3)->get()
        ]);
    }

    public function checkoutFood(Request $request) {
        return view('checkout', [
            'cart' => $cart = Food::where('slug', $request->name)->get()
        ]);
    }

    public function deleteCart(Request $request) {
        $cart = Cart::find($request->id);
        $cart->delete();

        return redirect()->back()->with('hapusBerhasil', '...');
    }

    public function successfully(Request $request) {
        return view('successfully');
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
