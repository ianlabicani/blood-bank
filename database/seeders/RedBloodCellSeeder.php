<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RedBloodCellSeeder extends Seeder
{
    public function run()
    {
        // Insert sample data with donor_id
        DB::table('red_blood_cells')->insert([
            [
                'quantity' => 10,
                'type' => 'A+',
                'donor_id' => 1, // Example: Donor ID 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quantity' => 15,
                'type' => 'O-',
                'donor_id' => 2, // Example: Donor ID 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quantity' => 20,
                'type' => 'B+',
                'donor_id' => 3, // Example: Donor ID 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quantity' => 12,
                'type' => 'AB-',
                'donor_id' => 1, // Example: Donor ID 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quantity' => 30,
                'type' => 'O+',
                'donor_id' => 4, // Example: Donor ID 4
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
