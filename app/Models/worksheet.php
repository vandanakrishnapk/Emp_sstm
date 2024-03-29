<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worksheet extends Model
{
    use HasFactory;
    protected $fillable=[
        'work_id',
        'emp_id',
        'date',
        'work',
        'start_time',
        'end_time',
        'status',
    ];
   
    protected $primarykey='work_id';
}
