<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'fathers_name',
        'mothers_name',
        'gender',
        'birth_date',
        'age',
        'country_id',
        'state_id',
        'city_id',
        'zip_code',
        'address',
        'phone',
        'email',
        'facebook_url',
        'whatsapp_number',
        'learning_center_id',
        'learning_center_type',
        'session_id',
        'enroll_date',
        'is_still_in_learning_center',
        'institute_name',
        'institute_type',
        'address_of_institute',
        'grade_of_students',
        'designation',
        'section_id',
        'class_id',
        'class_roll',
    ];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
