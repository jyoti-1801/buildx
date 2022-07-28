<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

     protected $fillable = [
        'title', 'display_color', 'start_date', 'work_days', 'assignees', 'end_date', 'hourly_start_time', 'hourly_end_time','remainder', 'predecessor_name', 'predecessor_type','predecessor_lag', 'schedule_phase','schedule_tag', 'subs_vendors', 'all_notes', 'internal_notes','sub_notes','owner_notes','file'
    ];
}
