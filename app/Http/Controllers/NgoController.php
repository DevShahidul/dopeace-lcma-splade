<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNgoRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Ngo;
use App\Models\State;
use App\Tables\Ngos;
use Illuminate\View\View;
use ProtoneMedia\Splade\Facades\Splade;

class NgoController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ngos.index', [
            'ngos' => Ngos::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.ngos.create', [
            'countries' => Country::all(),
            'states' => State::all(), 
            'cities' => City::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNgoRequest $request)
    {
        Ngo::create($request->validated());
        Splade::toast('Ngo created successfully!')->autoDismiss(3);
        return to_route('admin.ngos.index');
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
    public function edit(Ngo $ngo): View
    {
        return view('admin.ngos.edit', [
            'countries' => Country::all(),
            'states' => State::all(), 
            'cities' => City::all(),
            'ngo' => $ngo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreNgoRequest $request, Ngo $ngo)
    {
        $ngo->update([
            'name' => $request->name, 
            'country_id' => $request->country_id,
            'state_id' => $request->state_id, 
            'city_id' => $request->city_id, 
            'zip_code' => $request->zip_code,
            'address' => $request->address
        ]);
        Splade::toast('Ngo Updated successfully!')->autoDismiss(3);
        return to_route('admin.ngos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ngo $ngo)
    {
        $ngo->delete();
        Splade::toast('Ngo Deleted successfully!')->autoDismiss(3);
        return back();
    }
}
