<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /** @var Generator */
    protected $faker;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        //$this->call([
        //    CategorySeeder::class,
        //    SourceSeeder::class
        //    ]);
        $this->faker = $faker;
        \DB::table('news')
            ->insert($this->generateData());
    }

    public function generateData():array
    {
        $data = [];
        $data[] = [

            'title' => $this->faker->text(50),
            'content' => $this->faker->text,
            'publish_date' => $this->faker->date(),
            'news_category' => 6,
            'news_source' => 1,




            /*
            'title' => $this->faker->text(50),
            'content' => $this->faker->text,
            'source' => $this->faker->url,
            'publish_date' => $this->faker->date(),

            /*          'title' => 'Test News',
                        'content' => 'Test Content',
                        'source' => 'fake news',
                        'publish_date' => date('Y-m-d'),*/

        ];
        return $data;
    }

}
