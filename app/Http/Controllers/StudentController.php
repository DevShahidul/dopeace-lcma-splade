<?php

namespace App\Http\Controllers;

use Class;
use App\Models\Ngo;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Section;
use App\Models\Student;
use App\Tables\Students;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\LearningCenter;
use ProtoneMedia\Splade\Facades\Splade;
use App\Http\Requests\StudentStoreRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.students.index', [
            'students' => Students::class 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        $classes = Class::all();
        $sections = Section::all();
        $learningCenter = LearningCenter::all();
        return view('admin.students.create', compact(['countries', 'states', 'cities', 'classes', 'sections', 'learningCenter']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreRequest $request)
    {
        Student::create($request->validated());
        Splade::toast('Students Created successfully!')->autoDismiss(3);
        return to_route('admin.students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        $ngos = Ngo::all();
        return view('admin.learning-centers.edit', compact('learningCenter', 'ngos', 'countries', 'states', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
