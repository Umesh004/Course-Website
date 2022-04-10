<?php

namespace Database\Seeders;

use App\Models\Series;
use App\Models\Video;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Series::factory(Series::class)->count(10)->create()->each(function($series){
            $series->videos()->saveMany( \App\Models\Video::factory(Video::class)->count(10)->make());
        });
    }
}
