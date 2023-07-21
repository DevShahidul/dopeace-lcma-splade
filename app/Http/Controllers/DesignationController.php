<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDesignationRequest;
use App\Models\Designation;
use App\Tables\Designations;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Submit;
use ProtoneMedia\Splade\SpladeForm;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.designations.index', [
            'designations' => Designations::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $form = SpladeForm::make()
            ->action(route('admin.designations.store'))
            ->fields([
                Input::make('name')->label('Name'),
                Submit::make()->label('Save')
            ])->class('space-y-4 bg-white rounded p-4');

        return view('admin.designations.create', [
            'form' => $form
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateDesignationRequest $request)
    {
        Designation::create($request->validated());

        Splade::toast('designation created')->autoDismiss(3);

        return to_route('admin.designations.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Designation $designation)
    {
        $form = SpladeForm::make()
            ->action(route('admin.designations.update', $designation))
            ->method('PUT')
            ->fields([
                Input::make('name')->label('Name'),
                Submit::make()->label('Save')
            ])
            ->fill($designation)
            ->class('space-y-4 bg-white rounded p-4');

        return view('admin.designations.edit', [
            'form' => $form
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateDesignationRequest $request, Designation $designation)
    {
        $designation->update($request->validated());

        Splade::toast('designation updated')->autoDismiss(3);

        return to_route('admin.designations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation)
    {
        $designation->delete();
        Splade::toast('designation deleted')->autoDismiss(3);

        return back();
    }
}
