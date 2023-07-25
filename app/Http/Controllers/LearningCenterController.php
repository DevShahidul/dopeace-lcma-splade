<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLearningCenterRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\LearningCenter;
use App\Models\Ngo;
use App\Models\State;
use App\Tables\LearningCenters;
use Illuminate\View\View;
use ProtoneMedia\Splade\Facades\Splade;

class LearningCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.learning-centers.index', [
            'learningCenters' => LearningCenters::class
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
        $ngos = Ngo::all();
        return view('admin.learning-centers.create', compact(['countries', 'states', 'cities', 'ngos']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLearningCenterRequest $request)
    {
        LearningCenter::create($request->validated());
        Splade::toast('Learning Center Created successfully!')->autoDismiss(3);
        return to_route('admin.learning-centers.index');
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
    public function edit(LearningCenter $learningCenter)
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
    public function update(StoreLearningCenterRequest $request, LearningCenter $learningCenter)
    {
        $learningCenter->update($request->validated());
        Splade::toast('Learning Center Updated successfully!')->autoDismiss(3);
        return to_route('admin.learning-centers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LearningCenter $learningCenter)
    {
        $learningCenter->delete();
        Splade::toast('Learning Center Deleted successfully!')->autoDismiss(3);
        return to_route('admin.learning-centers.index');
    }
}
