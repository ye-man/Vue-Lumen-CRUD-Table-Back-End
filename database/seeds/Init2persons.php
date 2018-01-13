<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Init2persons extends Seeder
{
    public function run()
    {
        DB::table('persons')->insert([
            'name' => 'Roland',
            'lname' => 'Doda',
            'email' => 'roland@gmail.com',
            'age' => '24',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        DB::table('persons')->insert([
            'name' => 'Mariglen',
            'lname' => 'Doda',
            'email' => 'mariglen@gmail.com',
            'age' => '18',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
