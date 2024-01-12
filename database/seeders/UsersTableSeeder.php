<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data seeder untuk role 'superadmin'
        DB::table('users')->insert([
            'name' => 'Superadmin Name',
            'email' => 'superadmin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Ganti 'password' sesuai dengan kata sandi yang diinginkan
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan data seeder untuk role lainnya sesuai kebutuhan Anda
    }
}
