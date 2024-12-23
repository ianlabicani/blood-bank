<?php

namespace Database\Seeders;

use App\Models\RedBloodCell;
use App\Models\User;
use Illuminate\Database\Seeder;

class RedBloodCellSeeder extends Seeder
{
    public function run(): void
    {
        // Fetch all user IDs to assign as donor_id
        $userIds = User::pluck('id')->toArray();

        // Check if there are any users in the database
        if (empty($userIds)) {
            $this->command->warn('No users found in the database. Add users first before running this seeder.');
            return;
        }

        // Define the blood type options
        $types = ['A', 'A+', 'A-', 'B', 'B+', 'B-', 'AB', 'AB+', 'AB-', 'O', 'O+', 'O-'];

        // Generate sample red blood cell data
        for ($i = 0; $i < 50; $i++) {
            RedBloodCell::create([
                'donor_id' => $userIds[array_rand($userIds)], // Random user ID
                'quantity' => rand(1, 100), // Random quantity between 1 and 100
                'type' => $types[array_rand($types)], // Random blood type
            ]);
        }
    }
}
