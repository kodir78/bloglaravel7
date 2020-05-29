<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kodir Zaelani',
            'email' => 'admin@zaelani.id',
            'email_verified_at' => now(),
            // 'password' => 'secret12',
            'password' => bcrypt('secret12'),
            'role' => 0
        ]);
    }
}
