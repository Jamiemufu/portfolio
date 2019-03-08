<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([

            'name' => env('ADMIN_NAME', ''),
            'email' => env('ADMIN_EMAIL', ''),
            'email_verified_at' => now(),
            'password' => bcrypt(env('ADMIN_PASSWORD', '')),
            'role' => 'admin',
            'created_at' => now(),

        ]);
    }
}
