<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PredictMarket;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PredictMarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $predicts = PredictMarket::all()->sortBy('name');

        return view('admin.predict-markets.index', compact('predicts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PredictMarket $predictMarket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PredictMarket $predict)
    {
        return view('admin.predict-markets.edit', compact("predict"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PredictMarket $predict)
    {
        $predict->name = $request->name;
        $predict->bbfs = $request->bbfs;
        $predict->angka_main = $request->angka_main;
        $predict->colok_bebas = $request->colok_bebas;
        $predict->colok_macau = $request->colok_macau;
        $predict->shio = $request->shio;
        $predict->open = $request->open;
        $predict->close = $request->close;
        $predict->article = $request->article;
        $predict->save();

        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil Memperbarui Pasaran');

        return redirect(route('predicts.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PredictMarket $predict)
    {
        $newpath = substr($predict->image, 9);
        Storage::delete($newpath);
        Session::flash('status', 'success');
        Session::flash('message', 'Berhasil menghapus Pasaran ' . $predict->name);
        $predict->delete();

        return redirect()->route('predicts.index');
    }
}
