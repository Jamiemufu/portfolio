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

            'name' => 'admin',
            'email' => 'admin@jedesign.xyz',
            'email_verified_at' => now(),
            'password' => bcrypt('fdlves'),
            'role' => 'admin',
            'created_at' => now(),

        ]);
    }
}
