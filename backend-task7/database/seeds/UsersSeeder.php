<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 10; $i++){
		    	DB::table('users')->insert([
		            'name' => "kakha".$i,
		            'surname'=>"kakhadze".$i,
		            'email'=>"kakha.kakhadze.".$i."btu.edu.ge",
		            'password'=>"asdasd123",
		        ]);
    		}    }
}
