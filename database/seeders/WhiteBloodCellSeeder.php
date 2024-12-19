<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\WhiteBloodCell;
use Illuminate\Database\Seeder;

class WhiteBloodCellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all user IDs to assign as donor_id
        $userIds = User::pluck('id')->toArray();

        // Check if there are any users in the database
        if (empty($userIds)) {
            $this->command->warn('No users found in the database. Add users first before running this seeder.');
            return;
        }

        // Define the white blood cell types
        $types = ['granulocytes', 'lymphocytes', 'monocytes', 'eosinophils', 'basophils'];

        // Generate sample white blood cell data
        for ($i = 0; $i < 50; $i++) {
            WhiteBloodCell::create([
                'donor_id' => $userIds[array_rand($userIds)], // Random user ID
                'quantity' => rand(1, 100), // Random quantity between 1 and 100
                'type' => $types[array_rand($types)], // Random type
            ]);
        }
    }
}
