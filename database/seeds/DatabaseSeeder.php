<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Reservation;
use App\Transfer;
use App\Tour;
use App\Vip;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@around.com',
            'password' => bcrypt('admin'),
            'token' => '',
            'type' => 1
        ]);
    }
}
