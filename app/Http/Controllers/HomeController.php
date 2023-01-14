<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Toko;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function index() {
        return view('home', [
            'klien' => DB::table('users')->count(),
            'kuliner' => DB::table('food')->count(),
            'mitra' => DB::table('tokos')->count(),
            'data' => DB::table('food')->skip(0)->take(6)->get(),
            'title' => 'Layanan Pesan & Antar Makanan Online'
        ]);
    }

    public function about() {
        return view('about', [
            'title' => 'Tentang'
        ]);
    }

    public function pripo() {
        return view('privacy-policy', [
            'title' => 'Kebijakan Privasi'
        ]);
    }

    public function terofserv() {
        return view('terms-of-service', [
            'title' => 'Persyaratan Layanan'
        ]);
    }

    public function dashboard() {
        return view('dashboard', [
            'cart' => Cart::where('id_owner', auth()->user()->id)->get()
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
