<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
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
        $this->faker = $faker;
        \DB::table('source')
            ->insert($this->generateData());
        //'resource_name'
        //source
    }

    public function generateData():array
    {
        $data = [];
        $data[] = [
            'resource_name' => $this->faker->text(15),
            'source' => $this->faker->url,

        ];
        return $data;
    }
}
