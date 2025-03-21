<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreelancerRequest extends Model
{
    use HasFactory;

    // this allows us to call create method on the model
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'comments',
        'services',
    ];
}
