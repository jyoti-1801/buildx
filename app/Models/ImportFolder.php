<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportFolder extends Model
{
    use HasFactory;

     protected $fillable = [
        'source','user_id', 'project_mgmt', 'files', 'messaging', 'financial'
    ];
}

