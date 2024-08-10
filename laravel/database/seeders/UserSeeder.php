<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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

        User::create([
            'email' => 'joao@email.com',
            'name' => "joão",
            'password' => Hash::make("123"),
            'contato' => '123',
            'is_admin' => false,
        ]);
    }
}
