<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'gender', 'position_id',
        'department_id', 'hire_date', 'salary', 'phone', 'email', 'birth_date', 'address'
    ];

    public function position(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function businessTrips(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(BusinessTrip::class);
    }

    public function vacations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Vacation::class);
    }

    public function sickLeaves(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SickLeave::class);
    }
}
