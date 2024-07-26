<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name', 'middle_name', 'position', 'hire_date',
        'salary', 'phone', 'email', 'birth_date', 'gender', 'address'
    ];
    public function photo()
    {
        return $this->hasOne(EmployeePhoto::class);
    }
}
