<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class ApiResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Result::with('mahasiswa', 'jawaban')->get();
        if($result->isEmpty()){
            return response([
                "message" => 'Data not found!',
            ], 404);
        }
        return response([
            "message" => 'OK',
            "data" => $result,
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
            'mahasiswa_id' => 'required|exists:mahasiswa,id',
            'skor' => 'required|numeric',
        ]);
        
        Result::create($request->all());

        return response([
            "message" => 'data result created!',
        ], 201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
