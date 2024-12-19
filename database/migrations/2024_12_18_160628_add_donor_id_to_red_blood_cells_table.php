<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDonorIdToRedBloodCellsTable extends Migration
{
    public function up(): void
    {
        Schema::table('red_blood_cells', function (Blueprint $table) {
            $table->foreignId('donor_id')->constrained('users')->onDelete('cascade'); 
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
