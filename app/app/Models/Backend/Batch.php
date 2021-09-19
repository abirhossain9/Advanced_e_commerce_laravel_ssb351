<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $fillable = [
        'batch_name',
        'slug',
        'starting_date',
        'class_day',
        'class_timing',
        'fb_group',
        'sit_number',
        'branch_id',
        'course_id',
        'mentor_id',
        'batch_type',
        'admission_status',
        'status'
    ];
    public function course(){
        return $this->belongsTo('Course::class');
    }
    public function mentor(){
        return $this->belongsTo('Mentor::class');
    }
    public function branch(){
        return $this->belongsTo('Branch::class');
    }
}
