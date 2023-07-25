<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->constrained('classes');
            $table->foreignId('section_id')->constrained();
            $table->integer('class_roll');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->date('birth_date');
            $table->integer('age');
            $table->foreignId('country_id')->nullable()->constrained(table: 'countries', indexName: 'students_country_id');
            $table->foreignId('state_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->char('zip_code');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->foreignId('learning_center_id')->constrained();
            $table->enum('learning_center_type', ['coaching', 'pre_school'])->default('pre_school');
            $table->date('enroll_date');
            $table->boolean('is_still_in_learning_center')->default(1);
            $table->date('graduated_date');
            $table->string('institute_name');
            $table->string('institute_type');
            $table->string('address_of_institute');
            $table->string('grade_of_students');
            $table->string('department');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
