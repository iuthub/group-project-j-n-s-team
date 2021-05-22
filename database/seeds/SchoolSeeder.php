<?php

use Illuminate\Database\Seeder;
use App\School;
class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $s = new School(["school-name" => "Tashkent President School",
            "address" => "Tashkent region, Tashkent city, Doʻrmon Yoʻli koʻchasi, 34/2",
            "teachers_number" => 48,
            "image" => "",
            "website" => "www.piima.uz"]);
        $s->pupils_number = 122;
        $s -> save();

    }
}
