<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2022-11-18 10:13:09',
                'id' => 1,
                'name' => 'Nanda',
                'password' => '$2y$10$sI4VAnb0wV1Y2xJmXWI6wOZcNCFGKAprhRzWJQy3cPbT1nJ.hrNwG',
                'remember_token' => NULL,
                'updated_at' => '2022-11-18 10:13:09',
                'username' => 'admin',
            ),
        ));
        
        
    }
}