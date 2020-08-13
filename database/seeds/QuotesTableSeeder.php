<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
     //   for ($i = 0; $i < 5; $i++) {
            DB::table('quotes')->insert([
                'name' => $faker->name(),
                'email' => $faker->safeEmail,
                'quote_content' =>'request',
            ]);
        }
  //  }
}
