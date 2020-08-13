<?php

use Illuminate\Database\Seeder;

class QuoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            DB::table('quote')->insert([
                'name' => $faker->name(),
                'email' => $faker->safeEmail,
                'quote_content' =>'content'
            ]);
        }
    }
}
