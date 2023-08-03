<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'section_id',
        'class_roll',
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
        'enrollment_date',
        'is_still_in_learning_center',
        'graduated_date',
        'institute_name',
        'institute_class_roll',
        'address_of_institute',
        'grade_of_students',
        'department',
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
