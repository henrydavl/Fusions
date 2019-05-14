<?php

use App\Paket;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            $paket = new Paket();
            $paket->tipe_id = 1;
            $paket->kodePaket_id = $i;
            $paket->kodePaket_type = "App\PaketWeb";
            $paket->save();
        }

        for ($i = 1; $i <= 4; $i++) {
            $paket = new Paket();
            $paket->tipe_id = 2;
            $paket->kodePaket_id = $i;
            $paket->kodePaket_type = "App\PaketHosting";
            $paket->save();
        }

        for ($i = 1; $i <= 6; $i++) {
            $paket = new Paket();
            $paket->tipe_id = 3;
            $paket->kodePaket_id = $i;
            $paket->kodePaket_type = "App\PaketApp";
            $paket->save();
        }

        for ($i = 1; $i <= 47; $i++) {
            $paket = new Paket();
            $paket->tipe_id = 4;
            $paket->kodePaket_id = $i;
            $paket->kodePaket_type = "App\PaketDesain";
            $paket->save();
        }
    }
}
