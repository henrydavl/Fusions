<?php

use App\Play;
use Illuminate\Database\Seeder;

class PlaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $play = new Play();
        $play->nama = "Low";
        $play->price = 0;
        $play->featureGraphics = 1;
        $play->shortDesc = 40;
        $play->description = 2000;
        $play->icon = 1;
        $play->screenshot = 4;
        $play->country = 93;
        $play->save();

        $play = new Play();
        $play->nama = "Mid";
        $play->price = 200000;
        $play->featureGraphics = 1;
        $play->shortDesc = 60;
        $play->description = 3000;
        $play->icon = 2;
        $play->screenshot = 6;
        $play->country = 93;
        $play->save();

        $play = new Play();
        $play->nama = "High";
        $play->price = 200000;
        $play->featureGraphics = 2;
        $play->shortDesc = 80;
        $play->description = 4000;
        $play->icon = 2;
        $play->screenshot = 8;
        $play->country = 92;
        $play->save();
    }
}
