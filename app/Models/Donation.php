<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'username',
        'phone',
        'payment_method',
        'transaction_id',
        'amount',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
