<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabourRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_supervisor', 'labourer', 'general_builder', 'ground_worker', 'ground_worker_excavator_dumper', 'carpenter', 'bricklayer', 'bricklaying_gang', 'plasterer','plumber','electrician', 'decorator', 'roofer', 'ceramic_porcelain_tiler'
    ];
}


