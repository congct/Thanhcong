<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category') ->insert([
            [
                'id' => '1',
                'name' => '1'

               ],
               [
                   'id' => '2',
                   'name' => '1',
                   
  
                  ],
                  [
                    'id' => '4',
                   'name' => 'TAO',
                   ],
           ]);
    }
}
