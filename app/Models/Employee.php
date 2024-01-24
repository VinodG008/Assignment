<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'mob_num',
        'department',
        'addressline1',
        'addressline2',
        'district',
        'tahsil',
        'city',
        'pincode',
        'start_date',
        'end_date',
        'salary',
        'email',
        'password'
    ];

    public $table = 'employee_data';

}
