<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Jawaban;
use Illuminate\Http\Request;

class ApiJawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawaban = Jawaban::with('soal', 'mahasiswa')->get();
        if($jawaban->isEmpty()){
            return response([
                "message" => 'Data not found!',
            ], 404);
        }
        return response([
            "message" => 'OK',
            "data" => $jawaban,
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
            'mahasiswa_id' => 'required|numeric|exists:mahasiswa,id',
            'soal_id' => 'required|numeric|exists:soal,id',
            'jawaban' => 'required|string',
        ]);
        
        Jawaban::create($request->all());

        return response([
            "message" => 'data jawaban created!',
        ], 201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function show(Jawaban $jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jawaban $jawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Jawaban::find($request->id);
        if(!$data){
            return response([
                "message" => 'jawaban not found',
            ], 404); 
        }

        if ($data->delete()){
            return response([
                "message" => 'data jawaban deleted!',
            ], 200); 
        }

        return response([
            "message" => 'failed to delete data jawaban!',
        ], 500); 
    }
}
