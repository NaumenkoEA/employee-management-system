<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SickLeave extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id', 'start_date', 'end_date', 'reason'
    ];

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
