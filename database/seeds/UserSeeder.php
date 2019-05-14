<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Auriga Aristo';
        $user->email = 'auriga@gmail.com';
        $user->password = '$2y$10$YHupjSuQx3i2JWOmLbJQmulTsvVOrQoj67MXWwk1QazEd0dOd7h1.'; //aurigaaristo
        $user->role_id = 1;
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->name = 'Aristo Auriga';
        $user->email = 'aristo@gmail.com';
        $user->password = '$2y$10$gW4CFFhiGKgeH1deKmnqu.dqvaWq.tC1T8dzporB.JmOc5XuYT.I2'; //aristoauriga
        $user->role_id = 2;
        $user->active = 1;
        $user->save();
    }
}
