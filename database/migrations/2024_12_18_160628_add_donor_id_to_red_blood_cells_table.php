<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDonorIdToRedBloodCellsTable extends Migration
{
    public function up(): void
    {
        Schema::table('red_blood_cells', function (Blueprint $table) {
            // Add the donor_id foreign key column
            $table->foreignId('donor_id') // Foreign key
                ->constrained('users') // Reference to the 'users' table
                ->onDelete('cascade'); // Optionally delete blood records if the user is deleted
        });
    }

    public function down(): void
    {
        Schema::table('red_blood_cells', function (Blueprint $table) {
            // Remove the donor_id column and foreign key constraint
            $table->dropForeign(['donor_id']);
            $table->dropColumn('donor_id');
        });
    }
}
