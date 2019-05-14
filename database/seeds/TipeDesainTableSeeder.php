<?php

use App\TipeDesain;
use Illuminate\Database\Seeder;

class TipeDesainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipe = new TipeDesain();
        $tipe->tipe = 'Logo';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Packaging';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Poster';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Brosur';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Menu';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Kartu Nama';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'X-Banner';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Mascot';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Voucher';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Membership Card';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Note Cover';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Invitation Card';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Crew Card';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Billboard';
        $tipe->save();

        $tipe = new TipeDesain();
        $tipe->tipe = 'Ticket';
        $tipe->save();
    }
}
