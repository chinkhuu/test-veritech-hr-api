<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile',
        'family_name',
        'lastname',
        'firstname',
        'nationality',
        'ethnicity',
        'gender',
        'birth_date',
        'date_of_employment',
        'registration_number',
        'address',
        'temp_address',
        'phone_number',
        'taxpayer_number',
        'email',
        'password',
        'account_bank_name',
        'account_number',
        'occupation',
    ];

    protected $hidden = [
        'password',
    ];
}
