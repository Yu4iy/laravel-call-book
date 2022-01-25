<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Number;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
	  * @return void
     */
	 public function run(Faker $faker)
    {
		 for ($i=0; $i < 50 ; $i++) { 
			 $new_number = new Number();
			 $new_number->name =  $faker->name();
			 $new_number->mail =  $faker->email();
			 $new_number->phone =  $faker->phoneNumber();
			 $new_number->save();
		 }
		  
    }
}
