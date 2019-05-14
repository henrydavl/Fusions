<?php

use App\Tipe;
use Illuminate\Database\Seeder;

class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipe = new Tipe();
        $tipe->tipe = "Website";
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = "Hosting";
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = "Apps";
        $tipe->save();

        $tipe = new Tipe();
        $tipe->tipe = "Design";
        $tipe->save();
    }
}
