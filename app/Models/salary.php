<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
 
   
    use HasFactory;
    protected $fillable=[
        'salary_id',
        'emp_id',
        'date',
        'salary',
    ];
    protected $primaryKey = 'salary_id';
}
