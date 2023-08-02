<?php

namespace Database\Factories;

use App\Models\Student;
use Faker\Provider\en_US\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'class_roll' => $this->faker->numberBetween(1, 100),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'fathers_name' => $this->faker->name,
            'mothers_name' => $this->faker->firstNameFemale,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'birth_date' => $this->faker->date(),
            'age' => $this->faker->numberBetween(1, 50),
            'address' => $this->faker->address,
            'zip_code' => Address::postcode(),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'facebook_url' => $this->faker->url,
            'whatsapp_number' => $this->faker->phoneNumber,
            'learning_center_type' => $this->faker->randomElement(['coaching', 'pre_school']),
            'enrollment_date' => $this->faker->date(),
            'is_still_in_learning_center' => $this->faker->boolean(),
        ];
    }
}
