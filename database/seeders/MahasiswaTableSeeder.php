<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MahasiswaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mahasiswa')->delete();
        
        \DB::table('mahasiswa')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dyman',
                'age' => 24,
                'clases' => 'A',
                'created_at' => '2022-11-19 00:52:47',
                'updated_at' => '2022-11-19 00:52:47',
            ),
        ));
        
        
    }
}