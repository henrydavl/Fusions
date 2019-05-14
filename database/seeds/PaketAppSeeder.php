<?php

use App\PaketApp;
use Illuminate\Database\Seeder;

class PaketAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packet = new PaketApp();
        $packet->nama = "Amoeba";
        $packet->harga = 300000;
        $packet->pages = 3;
        $packet->duration = 5;
        $packet->publish = 1;
        $packet->connectivity = 1;
        $packet->freeEditPage = 1;
        $packet->troubleshooting = 1;
        $packet->storage = 1;
        $packet->offline = 1;
        $packet->online = 1;
        $packet->admin = 1;
        $packet->language = 1;
        $packet->save();

        $packet = new PaketApp();
        $packet->nama = "Sparrow";
        $packet->harga = 800000;
        $packet->pages = 5;
        $packet->duration = 7;
        $packet->publish = 2;
        $packet->play_id = 1;
        $packet->connectivity = 1;
        $packet->freeEditPage = 3;
        $packet->troubleshooting = 1;
        $packet->storage = 2;
        $packet->offline = 2;
        $packet->online = 1;
        $packet->admin = 1;
        $packet->language = 1;
        $packet->save();

        $packet = new PaketApp();
        $packet->nama = "Crow";
        $packet->harga = 1050000;
        $packet->pages = 5;
        $packet->duration = 7;
        $packet->publish = 2;
        $packet->play_id = 2;
        $packet->connectivity = 1;
        $packet->freeEditPage = 3;
        $packet->troubleshooting = 2;
        $packet->storage = 2;
        $packet->offline = 2;
        $packet->online = 1;
        $packet->admin = 1;
        $packet->language = 2;
        $packet->save();

        $packet = new PaketApp();
        $packet->nama = "Crocodile";
        $packet->harga = 1750000;
        $packet->pages = 5;
        $packet->duration = 10;
        $packet->publish = 2;
        $packet->play_id = 2;
        $packet->connectivity = 2;
        $packet->freeEditPage = 3;
        $packet->troubleshooting = 6;
        $packet->storage = 3;
        $packet->offline = 2;
        $packet->online = 2;
        $packet->admin = 2;
        $packet->language = 2;
        $packet->save();

        $packet = new PaketApp();
        $packet->nama = "Leopard";
        $packet->harga = 2500000;
        $packet->pages = 10;
        $packet->duration = 20;
        $packet->publish = 2;
        $packet->play_id = 3;
        $packet->connectivity = 2;
        $packet->freeEditPage = 8;
        $packet->troubleshooting = 12;
        $packet->storage = 3;
        $packet->offline = 2;
        $packet->online = 2;
        $packet->admin = 2;
        $packet->language = 3;
        $packet->save();

        $packet = new PaketApp();
        $packet->nama = "Elephant";
        $packet->harga = 3250000;
        $packet->pages = 15;
        $packet->duration = 30;
        $packet->publish = 2;
        $packet->play_id = 3;
        $packet->connectivity = 2;
        $packet->freeEditPage = 12;
        $packet->troubleshooting = 12;
        $packet->storage = 3;
        $packet->offline = 2;
        $packet->online = 2;
        $packet->admin = 2;
        $packet->language = 5;
        $packet->save();
    }
}
