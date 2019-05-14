<?php

use App\PaketDesain;
use Illuminate\Database\Seeder;

class PaketDesainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        food and drink
        $des = new PaketDesain();
        $des->catdesain_id = 1;
        $des->tipedesain_id = 1;
        $des->harga = 250000;
        $des->tambahanHarga = 50000;
        $des->durationFrom = 4;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 1;
        $des->tipedesain_id = 2;
        $des->harga = 200000;
        $des->tambahanHarga = 50000;
        $des->durationFrom = 14;
        $des->durationTo = 21;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 1;
        $des->tipedesain_id = 3;
        $des->harga = 50000;
        $des->tambahanHarga = 20000;
        $des->durationFrom = 3;
        $des->durationTo = 12;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 1;
        $des->tipedesain_id = 4;
        $des->harga = 58000;
        $des->tambahanHarga = 30000;
        $des->durationFrom = 3;
        $des->durationTo = 12;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 1;
        $des->tipedesain_id = 5;
        $des->harga = 70000;
        $des->tambahanHarga = 20000;
        $des->durationFrom = 5;
        $des->durationTo = 9;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 1;
        $des->tipedesain_id = 6;
        $des->harga = 150000;
        $des->tambahanHarga = 35000;
        $des->durationFrom = 2;
        $des->durationTo = 7;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 1;
        $des->tipedesain_id = 7;
        $des->harga = 150000;
        $des->tambahanHarga = 37000;
        $des->durationFrom = 7;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 1;
        $des->tipedesain_id = 8;
        $des->harga = 150000;
        $des->tambahanHarga = 70000;
        $des->durationFrom = 7;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 1;
        $des->tipedesain_id = 9;
        $des->harga = 50000;
        $des->tambahanHarga = 20000;
        $des->durationFrom = 3;
        $des->durationTo = 7;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 1;
        $des->tipedesain_id = 10;
        $des->harga = 100000;
        $des->tambahanHarga = 20000;
        $des->durationFrom = 2;
        $des->durationTo = 12;
        $des->revisi = 3;
        $des->save();

//        fashion and items
        $des = new PaketDesain();
        $des->catdesain_id = 2;
        $des->tipedesain_id = 1;
        $des->harga = 200000;
        $des->tambahanHarga = 50000;
        $des->durationFrom = 4;
        $des->durationTo = 14;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 2;
        $des->tipedesain_id = 2;
        $des->harga = 200000;
        $des->tambahanHarga = 50000;
        $des->durationFrom = 6;
        $des->durationTo = 17;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 2;
        $des->tipedesain_id = 3;
        $des->harga = 60000;
        $des->tambahanHarga = 20000;
        $des->durationFrom = 3;
        $des->durationTo = 12;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 2;
        $des->tipedesain_id = 4;
        $des->harga = 53000;
        $des->tambahanHarga = 30000;
        $des->durationFrom = 3;
        $des->durationTo = 12;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 2;
        $des->tipedesain_id = 6;
        $des->harga = 130000;
        $des->tambahanHarga = 35000;
        $des->durationFrom = 2;
        $des->durationTo = 7;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 2;
        $des->tipedesain_id = 7;
        $des->harga = 130000;
        $des->tambahanHarga = 30000;
        $des->durationFrom = 7;
        $des->durationTo = 14;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 2;
        $des->tipedesain_id = 9;
        $des->harga = 30000;
        $des->tambahanHarga = 20000;
        $des->durationFrom = 3;
        $des->durationTo = 7;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 2;
        $des->tipedesain_id = 10;
        $des->harga = 90000;
        $des->tambahanHarga = 20000;
        $des->durationFrom = 2;
        $des->durationTo = 12;
        $des->revisi = 2;
        $des->save();

//        corporate
        $des = new PaketDesain();
        $des->catdesain_id = 3;
        $des->tipedesain_id = 1;
        $des->harga = 400000;
        $des->tambahanHarga = 50000;
        $des->durationFrom = 5;
        $des->durationTo = 14;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 3;
        $des->tipedesain_id = 2;
        $des->harga = 300000;
        $des->tambahanHarga = 50000;
        $des->durationFrom = 6;
        $des->durationTo = 14;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 3;
        $des->tipedesain_id = 3;
        $des->harga = 90000;
        $des->tambahanHarga = 20000;
        $des->durationFrom = 3;
        $des->durationTo = 12;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 3;
        $des->tipedesain_id = 4;
        $des->harga = 70000;
        $des->tambahanHarga = 30000;
        $des->durationFrom = 3;
        $des->durationTo = 12;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 3;
        $des->tipedesain_id = 6;
        $des->harga = 100000;
        $des->tambahanHarga = 35000;
        $des->durationFrom = 4;
        $des->durationTo = 7;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 3;
        $des->tipedesain_id = 11;
        $des->harga = 65000;
        $des->tambahanHarga = 10000;
        $des->durationFrom = 5;
        $des->durationTo = 14;
        $des->revisi = 2;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 3;
        $des->tipedesain_id = 8;
        $des->harga = 130000;
        $des->tambahanHarga = 70000;
        $des->durationFrom = 7;
        $des->durationTo = 14;
        $des->revisi = 2;
        $des->save();

//        tech and media
        $des = new PaketDesain();
        $des->catdesain_id = 4;
        $des->tipedesain_id = 1;
        $des->harga = 200000;
        $des->tambahanHarga = 50000;
        $des->durationFrom = 5;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 4;
        $des->tipedesain_id = 3;
        $des->harga = 67000;
        $des->tambahanHarga = 20000;
        $des->durationFrom = 3;
        $des->durationTo = 12;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 4;
        $des->tipedesain_id = 4;
        $des->harga = 68000;
        $des->tambahanHarga = 25000;
        $des->durationFrom = 3;
        $des->durationTo = 18;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 4;
        $des->tipedesain_id = 6;
        $des->harga = 100000;
        $des->tambahanHarga = 35000;
        $des->durationFrom = 4;
        $des->durationTo = 7;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 4;
        $des->tipedesain_id = 11;
        $des->harga = 60000;
        $des->tambahanHarga = 10000;
        $des->durationFrom = 5;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 4;
        $des->tipedesain_id = 8;
        $des->harga = 100000;
        $des->tambahanHarga = 70000;
        $des->durationFrom = 7;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

//        service
        $des = new PaketDesain();
        $des->catdesain_id = 5;
        $des->tipedesain_id = 1;
        $des->harga = 250000;
        $des->tambahanHarga = 50000;
        $des->durationFrom = 5;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 5;
        $des->tipedesain_id = 3;
        $des->harga = 67000;
        $des->tambahanHarga = 20000;
        $des->durationFrom = 3;
        $des->durationTo = 12;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 5;
        $des->tipedesain_id = 4;
        $des->harga = 68000;
        $des->tambahanHarga = 25000;
        $des->durationFrom = 3;
        $des->durationTo = 16;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 5;
        $des->tipedesain_id = 6;
        $des->harga = 100000;
        $des->tambahanHarga = 35000;
        $des->durationFrom = 4;
        $des->durationTo = 7;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 5;
        $des->tipedesain_id = 7;
        $des->harga = 85000;
        $des->tambahanHarga = 10000;
        $des->durationFrom = 5;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 5;
        $des->tipedesain_id = 8;
        $des->harga = 100000;
        $des->tambahanHarga = 70000;
        $des->durationFrom = 7;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

//        event
        $des = new PaketDesain();
        $des->catdesain_id = 6;
        $des->tipedesain_id = 1;
        $des->harga = 150000;
        $des->tambahanHarga = 50000;
        $des->durationFrom = 5;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 6;
        $des->tipedesain_id = 12;
        $des->harga = 120000;
        $des->tambahanHarga = 30000;
        $des->durationFrom = 7;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 6;
        $des->tipedesain_id = 3;
        $des->harga = 130000;
        $des->tambahanHarga = 20000;
        $des->durationFrom = 3;
        $des->durationTo = 12;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 6;
        $des->tipedesain_id = 4;
        $des->harga = 70000;
        $des->tambahanHarga = 25000;
        $des->durationFrom = 3;
        $des->durationTo = 16;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 6;
        $des->tipedesain_id = 13;
        $des->harga = 87000;
        $des->tambahanHarga = 20000;
        $des->durationFrom = 4;
        $des->durationTo = 7;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 6;
        $des->tipedesain_id = 7;
        $des->harga = 100000;
        $des->tambahanHarga = 30000;
        $des->durationFrom = 5;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 6;
        $des->tipedesain_id = 8;
        $des->harga = 100000;
        $des->tambahanHarga = 70000;
        $des->durationFrom = 7;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 6;
        $des->tipedesain_id = 15;
        $des->harga = 85000;
        $des->tambahanHarga = 30000;
        $des->durationFrom = 7;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 6;
        $des->tipedesain_id = 14;
        $des->harga = 200000;
        $des->tambahanHarga = 50000;
        $des->durationFrom = 7;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();

        $des = new PaketDesain();
        $des->catdesain_id = 6;
        $des->tipedesain_id = 11;
        $des->harga = 65000;
        $des->tambahanHarga = 10000;
        $des->durationFrom = 5;
        $des->durationTo = 14;
        $des->revisi = 3;
        $des->save();
    }
}
