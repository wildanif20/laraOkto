<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('articles')->insert([
        //     'title' => 'BeritaUtama',
        //     'content' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti, officiis asperiores fugiat nam, reiciendis minima ratione exercitationem alias, possimus delectus corporis ullam perferendis veniam odio nobis eius ducimus doloremque a.",
        //     'created_at' => Carbon::now()
        // ]);      

        $faker = Faker::create('id_ID');

        for ($i = 1; $i < 20; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->word,
                'content' => $faker->text
            ]);
        }
    }
}
