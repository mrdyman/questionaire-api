<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personal_access_tokens')->delete();
        
        \DB::table('personal_access_tokens')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'myapptoken',
                'token' => '67ee329c00e03c4c369c6f9a1aa47ba887a497f72ad7f263b82927e73ffffbfc',
                'abilities' => '["*"]',
                'last_used_at' => '2022-11-18 10:46:51',
                'expires_at' => NULL,
                'created_at' => '2022-11-18 10:34:24',
                'updated_at' => '2022-11-18 10:46:51',
            ),
        ));
        
        
    }
}