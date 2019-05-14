<?php

use App\PaketWeb;
use Illuminate\Database\Seeder;

class PaketWebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paket = new PaketWeb();
        $paket->nama = "Farmer";
        $paket->harga = 390000;
        $paket->freeHosting = 1;
        $paket->freeDomain = 1;
        $paket->freeSubdomain = 0;
        $paket->pages = 3;
        $paket->seo = 3;
        $paket->duration = 2;
        $paket->freeEditPage = 1;
        $paket->troubleshooting = 3;
        $paket->responsive = 2;
        $paket->ftp = 1;
        $paket->slideshow = 1;
        $paket->cms = 1;
        $paket->ssl = 1;
        $paket->login = 1;
        $paket->siteSearch = 1;
        $paket->save();

        $paket = new PaketWeb();
        $paket->nama = "Magi";
        $paket->harga = 580000;
        $paket->freeHosting = 1;
        $paket->freeDomain = 1;
        $paket->freeSubdomain = 0;
        $paket->pages = 5;
        $paket->seo = 5;
        $paket->duration = 3;
        $paket->freeEditPage = 3;
        $paket->troubleshooting = 3;
        $paket->responsive = 2;
        $paket->ftp = 2;
        $paket->slideshow = 2;
        $paket->cms = 1;
        $paket->ssl = 1;
        $paket->login = 1;
        $paket->siteSearch = 1;
        $paket->save();

        $paket = new PaketWeb();
        $paket->nama = "Poets";
        $paket->harga = 780000;
        $paket->freeHosting = 1;
        $paket->freeDomain = 2;
        $paket->freeSubdomain = 1;
        $paket->pages = 15;
        $paket->seo = 15;
        $paket->duration = 5;
        $paket->freeEditPage = 8;
        $paket->troubleshooting = 3;
        $paket->responsive = 2;
        $paket->ftp = 2;
        $paket->slideshow = 2;
        $paket->cms = 2;
        $paket->ssl = 1;
        $paket->login = 1;
        $paket->siteSearch = 1;
        $paket->save();

        $paket = new PaketWeb();
        $paket->nama = "Merchant";
        $paket->harga = 1380000;
        $paket->freeHosting = 2;
        $paket->freeDomain = 2;
        $paket->freeSubdomain = 3;
        $paket->pages = 30;
        $paket->seo = 30;
        $paket->duration = 15;
        $paket->freeEditPage = 16;
        $paket->troubleshooting = 12;
        $paket->responsive = 2;
        $paket->ftp = 2;
        $paket->slideshow = 2;
        $paket->cms = 2;
        $paket->ssl = 2;
        $paket->login = 2;
        $paket->siteSearch = 1;
        $paket->save();

        $paket = new PaketWeb();
        $paket->nama = "Alchemist";
        $paket->freeHosting = 2;
        $paket->harga = 2490000;
        $paket->freeDomain = 2;
        $paket->freeSubdomain = 5;
        $paket->pages = 50;
        $paket->seo = 50;
        $paket->duration = 30;
        $paket->freeEditPage = 30;
        $paket->troubleshooting = 12;
        $paket->responsive = 2;
        $paket->ftp = 2;
        $paket->slideshow = 2;
        $paket->cms = 2;
        $paket->ssl = 2;
        $paket->login = 2;
        $paket->siteSearch = 2;
        $paket->save();
    }
}
