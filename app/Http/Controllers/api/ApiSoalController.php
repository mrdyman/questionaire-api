<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Soal;
use Illuminate\Http\Request;

class ApiSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal = Soal::all();
        if($soal->isEmpty()){
            return response([
                "message" => 'Data not found!',
            ], 404);
        }
        return response([
            "message" => 'OK',
            "data" => $soal,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'soal' => 'required|string',
            'is_benar' => 'required|in:1,0',
        ]);
        
        Soal::create($request->all());

        return response([
            "message" => 'data soal created!',
        ], 201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show(Soal $soal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soal $soal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soal $soal)
    {
        //
    }
}
