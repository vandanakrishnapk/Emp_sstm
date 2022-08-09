<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable=[
        'leave_id',
        'emp_id',
        'date',
    ];
    protected $primarykey='leave_id';
}
