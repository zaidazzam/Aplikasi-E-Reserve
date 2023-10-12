<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'mrzf',
            'email' => 'mrzf@833.com',
            'password' => bcrypt('1234'),
            'type' => 'admin',
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name' => 'mrzf',
            'email' => 'pemilik@833.com',
            'password' => bcrypt('1234'),
            'type' => 'pemilik',
            'email_verified_at' => Carbon::now()
        ]);
    }
}
