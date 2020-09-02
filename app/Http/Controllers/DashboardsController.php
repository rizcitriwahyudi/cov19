<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $global_positif = Http::get('https://api.kawalcorona.com/positif');
        $data_global_positif = $global_positif->json();

        $global_sembuh = Http::get('https://api.kawalcorona.com/sembuh');
        $data_global_sembuh = $global_sembuh->json();

        $global_meninggal = Http::get('https://api.kawalcorona.com/meninggal');
        $data_global_meninggal = $global_meninggal->json();
        // dd($data_global_positif);

        $data_indo_provinsi = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data_provinsi = $data_indo_provinsi->json();

        $data_indonesia = Http::get('https://api.kawalcorona.com/indonesia');
        $data_indo = $data_indonesia->json();

        // dd($indo, $data, $data_global_positif);
        return view('dashboards.index', compact('data_provinsi','data_indo', 'data_global_positif','data_global_sembuh','data_global_meninggal'));
    }

    public function indonesia()
    {
        return view('dashboards.indonesia', compact('data'));
    }

    /**z
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
