<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
            \DB::table('category')
                ->insert($this->generateData());
    }


    public function generateData():array
    {
        $data = [];
        $data[] = [
            'name_category' => $this->faker->text(10),
        ];
        return $data;
    }
}
