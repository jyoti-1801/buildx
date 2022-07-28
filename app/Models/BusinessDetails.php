<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_name', 'business_name', 'email', 'phone_no', 'address_1', 'address_2', 'city', 'country', 'postcode','vat','vat_no', 'company_logo', 'default_insurance_note', 'default_notes','default_additional_notes'
    ];
}



