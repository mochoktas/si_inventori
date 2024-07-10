<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('tempat')->insert([
            'nama' => 'admin',
        ]);
        DB::table('users')->insert([
            'nama' => 'admin',
            'email_pribadi' => 'admin@123.com',
            'password' => Hash::make('admin1234'),
            'role' => '0',
            'tempat_id' => '1',
        ]);
        
    }
}
