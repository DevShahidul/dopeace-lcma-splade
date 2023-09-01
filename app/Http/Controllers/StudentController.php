<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentStoreRequest;
use App\Models\City;
use App\Models\Classes;
use App\Models\Country;
use App\Models\LearningCenter;
use App\Models\Section;
use App\Models\State;
use App\Models\Student;
use App\Tables\Students;
use Carbon\Carbon;
use Illuminate\View\View;
use ProtoneMedia\Splade\Facades\Splade;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.students.index', [
            'students' => Students::class,
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
        $classes = Classes::all();
        $sections = Section::all();
        $learningCenters = LearningCenter::all();
        return view('admin.students.create', compact(['countries', 'states', 'cities', 'classes', 'sections', 'learningCenters']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreRequest $request)
    {

        $age = Carbon::parse($request->birth_date)->diff(Carbon::now())->y;
        Student::create(
            $request->validated() + 
            [
                'age' => "{$age} years old",
            ]
        );
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
        $classes = Classes::all();
        $sections = Section::all();
        $learningCenters = LearningCenter::all();
        return view('admin.students.edit', compact('student', 'countries', 'states', 'cities', 'classes', 'sections', 'learningCenters'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentStoreRequest $request, Student $student)
    {
        $age = Carbon::parse($request->birth_date)->diff(Carbon::now())->y;
        $student->update($request->validated()+ 
        [
            'age' => "{$age} years old",
        ]);
        Splade::toast('Student updated successfully!')->autoDismiss(3);
        return to_route('admin.students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        Splade::toast('Student deleted successfully!')->autoDismiss(3);
        return to_route('admin.student.index');
    }
}
