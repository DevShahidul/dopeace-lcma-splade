<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'class_id' => ['required'],
            'section_id' => ['required'],
            'class_roll' => ['required', 'string', 'max:20'],
            'first_name' => ['required', 'string', 'max:120'],
            'last_name' => ['required', 'string', 'max:120'],
            'fathers_name' => ['required', 'string', 'max:120'],
            'mothers_name' => ['required', 'string', 'max:120'],
            'gender' => ['required', 'string', 'max:120'],
            'birth_date' => ['required', 'date'],
            'age' => ['string'],
            'country_id' => ['required'],
            'state_id' => ['required'],
            'city_id' => ['required'],
            'zip_code' => ['required', 'string', 'max:25'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['string', 'max:255'],
            'email' => ['string', 'max:255'],
            'facebook_url' => ['string', 'max:255'],
            'whatsapp_number' => ['string', 'max:255'],
            'learning_center_id' => ['required', 'string', 'max:255'],
            'learning_center_type' => ['string', 'max:255'],
            'enrollment_date' => ['date'],
            'is_still_in_learning_center' => ['required', 'boolean'],
            'graduated_date' => ['date'],
            'institute_name' => ['string', 'max:255'],
            'institute_class_roll' => ['string', 'max:255'],
            'address_of_institute' => ['string'],
            'grade_of_students' => ['string', 'max:255'],
            'department' => ['string', 'max:60'],
        ];
    }
}
