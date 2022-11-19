<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class ApiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        if($mahasiswa->isEmpty()){
            return response([
                "message" => 'Data not found!',
            ], 404);
        }
        return response([
            "message" => 'OK',
            "data" => $mahasiswa,
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
            'name' => 'required|string',
            'age' => 'required|numeric',
            'clases' => 'required|string',
        ]);
        
        Mahasiswa::create($request->all());

        return response([
            "message" => 'data mahasiswa created!',
        ], 201); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Mahasiswa::find($request->id);
        if(!$data){
            return response([
                "message" => 'mahasiswa not found',
            ], 404); 
        }

        if ($data->delete()){
            return response([
                "message" => 'data mahasiswa deleted!',
            ], 200); 
        }

        return response([
            "message" => 'failed to delete data mahasiswa!',
        ], 500); 
    }
}
