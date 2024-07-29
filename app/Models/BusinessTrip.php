<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessTrip extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date' ,
        'goal_business_trip' ,
        'country' ,
        'city' ,
    ];

    public function employees(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
