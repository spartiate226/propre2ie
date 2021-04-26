<?php

namespace App\Http\Controllers;

use App\poubel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PoubelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return poubel::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
		
        poubel::create($request->except("api_token"));
       //return Response()->json(['reponse'=>"success"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\poubel  $poubel
     * @return \Illuminate\Http\Response
     */
    public function show(poubel $poubel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\poubel  $poubel
     * @return \Illuminate\Http\Response
     */
    public function edit(poubel $poubel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\poubel  $poubel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, poubel $poubel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\poubel  $poubel
     * @return \Illuminate\Http\Response
     */
    public function destroy($poubel)
    {
        $pou=poubel::find($poubel);
        $pou->delete();
        return Response()->json(['reponse'=>"success"]);
    }
}
