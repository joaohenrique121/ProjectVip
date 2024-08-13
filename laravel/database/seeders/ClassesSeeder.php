<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = Level::all('id');

        foreach ($levels as $level) {
            Classes::create([
                'level_id' => $level->id,
            ]);
        }
    }
}
