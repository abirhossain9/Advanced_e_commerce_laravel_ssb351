<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCurriculum extends Model
{
    use HasFactory;
    protected $fillable =[
        'course_id',
        'one_en',
        'one_bn',
        'one_desc',
        'two_en',
        'two_bn',
        'two_desc',
        'three_en',
        'three_bn',
        'three_desc',
        'four_en',
        'four_bn',
        'four_desc',
        'five_en',
        'five_bn',
        'five_desc',
        'status',
    ];
}
