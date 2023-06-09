<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' =>'Joko Prasetio',
            'email' => 'joko12prasetio@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}
