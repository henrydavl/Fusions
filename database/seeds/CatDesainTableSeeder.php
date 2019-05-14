<?php

use App\CatDesain;
use Illuminate\Database\Seeder;

class CatDesainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = new CatDesain();
        $food->category = 'Food and Drink';
        $food->save();

        $fashion = new CatDesain();
        $fashion->category = 'Fashions and Items';
        $fashion->save();

        $corp = new CatDesain();
        $corp->category = 'Corporate';
        $corp->save();

        $tech = new CatDesain();
        $tech->category = 'Technology and Media';
        $tech->save();

        $service = new CatDesain();
        $service->category = 'Service';
        $service->save();

        $event = new CatDesain();
        $event->category = 'Event';
        $event->save();
    }
}
