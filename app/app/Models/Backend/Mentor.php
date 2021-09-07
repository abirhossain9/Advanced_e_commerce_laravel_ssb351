<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'designation',
        'slug',
        'overview',
        'phone',
        'address',
        'email',
        'fiverr_img',
        'fiverr_url',
        'upwork_img',
        'upwork_url',
        'profile_pic',
        'status'
    ];
}
