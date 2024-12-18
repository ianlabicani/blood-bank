<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedBloodCell extends Model
{
    /** @use HasFactory<\Database\Factories\RedBloodCellFactory> */
    use HasFactory;

    public function donor()
    {
        return $this->belongsTo(User::class, 'donor_id');
    }
}
