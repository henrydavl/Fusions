<?php

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        $this->call(RoleTableSeeder::class);
        $this->call(CatDesainTableSeeder::class);
        $this->call(TipeDesainTableSeeder::class);
        $this->call(PaketAppSeeder::class);
        $this->call(PlaySeeder::class);
        $this->call(PaketDesainSeeder::class);
        $this->call(PaketHostingSeeder::class);
        $this->call(PaketWebSeeder::class);
        $this->call(TipeSeeder::class);
        $this->call(PaketSeeder::class);
        $this->call(UserSeeder::class);

        Model::reguard();
    }
}
