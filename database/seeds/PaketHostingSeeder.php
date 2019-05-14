<?php

use App\PaketHosting;
use Illuminate\Database\Seeder;

class PaketHostingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paket = new PaketHosting();
        $paket->nama = "Small";
        $paket->harga = 49999;
        $paket->duration = 1;
        $paket->save();

        $paket = new PaketHosting();
        $paket->nama = "Medium";
        $paket->harga = 119000;
        $paket->duration = 3;
        $paket->save();

        $paket = new PaketHosting();
        $paket->nama = "Large";
        $paket->harga = 208900;
        $paket->duration = 6;
        $paket->save();

        $paket = new PaketHosting();
        $paket->nama = "Huge";
        $paket->harga = 357900;
        $paket->duration = 12;
        $paket->save();
    }
}
