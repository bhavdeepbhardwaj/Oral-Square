<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'email',
        'phone',
        'note',
        'app_date',
        'treatment_needed'
    ];
}
