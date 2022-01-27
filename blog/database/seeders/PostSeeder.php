<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Eliminar los registros viejos
        DB::table('posts')->truncate();
        //genera nombres, parrafos aleatorios, img...
        for($i=0; $i<5; $i++){
            DB::table('posts')->insert([
                    'title' => $faker->name,
                    'body' => $faker->paragraph(),
                    'image' => $faker->imageUrl(),
                /*'image' => Str::random(60),*/
            ]);
        }
    }
}
