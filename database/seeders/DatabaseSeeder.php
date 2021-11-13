<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user -> name = "admin";
        $user -> email = "admin@gmail.com";
        $user -> address = "admin";
        $user -> password = "1234";
        $user -> role = "admin";

        $user->save();
    }
}
