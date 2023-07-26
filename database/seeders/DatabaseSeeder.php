<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Production;
use App\Models\Line;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Production::factory(20)->create();

        Line::create([
            'line_id' => 1,
            'line_name' => 'Line 1'
        ]);
        Line::create([
            'line_id' => 2,
            'line_name' => 'Line 2'
        ]);
        Line::create([
            'line_id' => 3,
            'line_name' => 'Line 3'
        ]);
        Line::create([
            'line_id' => 4,
            'line_name' => 'Line 4'
        ]);
        Line::create([
            'line_id' => 5,
            'line_name' => 'Line 5'
        ]);
        Line::create([
            'line_id' => 6,
            'line_name' => 'Line 6'
        ]);
        Line::create([
            'line_id' => 7,
            'line_name' => 'Line 7'
        ]);
        Line::create([
            'line_id' => 8,
            'line_name' => 'Line 8'
        ]);
        Line::create([
            'line_id' => 9,
            'line_name' => 'Line 9'
        ]);
        Line::create([
            'line_id' => 10,
            'line_name' => 'Line 10'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
