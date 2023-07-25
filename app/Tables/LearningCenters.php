<?php

namespace App\Tables;

use App\Models\LearningCenter;
use App\Models\Ngo;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class LearningCenters extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return LearningCenter::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['id', 'name', 'country_id', 'state_id', 'city_id', 'ngo_id'])
            ->column('id', sortable: true)
            ->column('name')
            ->column(key: 'ngo.name', label: "Ngo")
            ->column(key: 'country.name', label: 'Country', sortable: true)
            ->column(key: 'state.name', label: 'State', sortable: true)
            ->column(key: 'city.name', label: 'City', sortable: true)
            ->column('action')
            ->selectFilter(
                key: 'ngo_id',
                options: Ngo::all()->pluck('name', 'id')->toArray(),
                label: 'Filter By Ngo',
                noFilterOption: true,
                noFilterOptionLabel: 'All Ngo'
            )
            ->bulkAction(
                label: 'Delete Selected Learning Centers',
                each: fn (LearningCenter $learningCenter) => $learningCenter->delete(),
                confirm: 'Are you sure you want to delete the selected Learning Centers?',
                confirmButton: 'Delete',
                cancelButton: 'Cancel',
                after: fn () => Toast::info('Learning Centers deleted successfully!'),
            )
            ->paginate(10);
            // ->searchInput()
            // ->selectFilter()
            // ->withGlobalSearch()

            // ->bulkAction()
            // ->export()
    }
}
