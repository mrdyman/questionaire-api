<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SoalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('soal')->delete();
        
        \DB::table('soal')->insert(array (
            0 => 
            array (
                'id' => 1,
                'soal' => 'Kesehatan reproduksi remaja merupakan suatu kondisi sehat yang menyangkut sistem, fungsi dan proses reproduksi pada remaja termasuk sehat secara mental serta sosial kultural',
                'is_benar' => 1,
                'created_at' => '2022-11-19 00:08:29',
                'updated_at' => '2022-11-19 00:08:29',
            ),
            1 => 
            array (
                'id' => 2,
                'soal' => 'Tujuan dari kesehatan reproduksi adalah meningkatnya kemandirian wanita dalam memutuskan peran dan fungsi reproduksinya',
                'is_benar' => 1,
                'created_at' => '2022-11-19 00:09:13',
                'updated_at' => '2022-11-19 00:09:13',
            ),
            2 => 
            array (
                'id' => 3,
                'soal' => 'Perubahan jasmani pada remaja putri yaitu mulai berkembangnya payudara',
                'is_benar' => 1,
                'created_at' => '2022-11-19 00:09:30',
                'updated_at' => '2022-11-19 00:09:30',
            ),
            3 => 
            array (
                'id' => 4,
                'soal' => 'Vagina, mulut rahim/serviks, rahim, tuba dan indung telur merupakan alat reproduksi bagian dalam',
                'is_benar' => 1,
                'created_at' => '2022-11-19 00:09:50',
                'updated_at' => '2022-11-19 00:09:50',
            ),
            4 => 
            array (
                'id' => 5,
                'soal' => 'Organ reproduksi remaja perempuan hanya vagina dan selaput darah.',
                'is_benar' => 1,
                'created_at' => '2022-11-19 00:10:05',
                'updated_at' => '2022-11-19 00:10:05',
            ),
            5 => 
            array (
                'id' => 6,
                'soal' => 'Remaja perempuan yang sudah menstruasi dapat hamil jika berhubungan seksual',
                'is_benar' => 1,
                'created_at' => '2022-11-19 00:10:19',
                'updated_at' => '2022-11-19 00:10:19',
            ),
            6 => 
            array (
                'id' => 7,
                'soal' => 'Masturbasi atau onani salah satu cara yang dilakukan jika seseorang tidak mampu mengendalikan dorongan seksual yang dirasakannya',
                'is_benar' => 1,
                'created_at' => '2022-11-19 00:10:34',
                'updated_at' => '2022-11-19 00:10:34',
            ),
            7 => 
            array (
                'id' => 8,
                'soal' => 'Peristiwa keluarnya darah dari vagina secara teratur yang bersifat alamiah adalah menstruasi',
                'is_benar' => 1,
                'created_at' => '2022-11-19 00:10:46',
                'updated_at' => '2022-11-19 00:10:46',
            ),
            8 => 
            array (
                'id' => 9,
                'soal' => 'Hubungan seksual sebelum menikah juga berisiko terkena penyakit menular seksual seperti sifilis',
                'is_benar' => 1,
                'created_at' => '2022-11-19 00:10:58',
                'updated_at' => '2022-11-19 00:10:58',
            ),
            9 => 
            array (
                'id' => 10,
            'soal' => 'Abortus (tindakan menggugurkan kandungan) berisiko mengakibatkan kematian karena perdarahan',
                'is_benar' => 1,
                'created_at' => '2022-11-19 00:11:22',
                'updated_at' => '2022-11-19 00:11:22',
            ),
        ));
        
        
    }
}