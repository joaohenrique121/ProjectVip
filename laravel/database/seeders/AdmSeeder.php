<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'adm@gmail.com',
            'name' => 'adm',
            'password' => Hash::make('adm1235678'),
            "contato" => '123123',
            'is_admin' => true
        ]);

    }
}
