<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhiteBloodCell extends Model
{
    /** @use HasFactory<\Database\Factories\WhiteBloodCellFactory> */
    use HasFactory;

    protected $fillable = ['donor_id', 'quantity', 'type'];

    /**
     * Define the relationship with the Donor (User).
     */
    public function donor()
    {
        return $this->belongsTo(User::class, 'donor_id'); // Donor is a user
    }
}
