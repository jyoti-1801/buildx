<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleDemo extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname','lname','phone', 'company', 'email', 'state', 'country'
    ];
}


