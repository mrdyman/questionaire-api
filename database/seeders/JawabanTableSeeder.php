<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JawabanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jawaban')->delete();
        
        \DB::table('jawaban')->insert(array (
            0 => 
            array (
                'id' => 1,
                'mahasiswa_id' => 1,
                'soal_id' => 1,
                'jawaban' => 'Benar',
                'created_at' => '2022-11-19 00:53:05',
                'updated_at' => '2022-11-19 00:53:05',
            ),
        ));
        
        
    }
}