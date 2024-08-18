<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'email' => 'adm@gmail.com',
            'name' => 'adm',
            'password' => Hash::make('admin'),
            "contato" => '123123',
            'id_type' => "1",
        ]);

        User::create([
            'email' => 'joao@email.com',
            'name' => "joão",
            'password' => Hash::make("123"),
            'contato' => '123',
            'id_type' => "2",
        ]);
    }
}
