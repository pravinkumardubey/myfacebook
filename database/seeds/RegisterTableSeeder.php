<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegisterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('register')->insert(
        	[
        		'email'=>"email@gmail.com",
        		'password'=>bcrypt(123456)
        	]
        );
    }
}
