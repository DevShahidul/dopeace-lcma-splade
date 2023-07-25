<?php

namespace App\Tables;

use App\Models\Country;
use App\Models\Ngo;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class Ngos extends AbstractTable
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
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('name', 'LIKE', "%{$value}%");
                });
            });
        });
        return QueryBuilder::for(Ngo::class)
            ->defaultSort('id')
            ->allowedSorts(['id', 'name'])
            ->allowedFilters(['id', 'name', 'country_id', $globalSearch]);
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
            ->withGlobalSearch(columns: ['name', 'country_id', 'state_id', 'city_id'])
            ->column('id', sortable: true)
            ->column('name', sortable: true)
            ->column(key: 'country.name', label: 'Country', sortable: true)
            ->column(key: 'state.name', label: 'State', sortable: true)
            ->column(key: 'city.name', label: 'City', sortable: true)
            ->column('action')
            ->selectFilter(
                key: 'country_id',
                options: Country::all()->pluck('name', 'id')->toArray(),
                label: 'Filter By Country',
                noFilterOption: true,
                noFilterOptionLabel: 'All Country'
            )
            ->bulkAction(
                label: 'Delete Selected Ngos',
                each: fn (Ngo $ngo) => $ngo->delete(),
                confirm: 'Are you sure you want to delete the selected ngos?',
                confirmButton: 'Delete',
                cancelButton: 'Cancel',
                after: fn () => Toast::info('Ngos deleted successfully!'),
            )
            ->paginate(15);

            // ->searchInput()
            // ->selectFilter()
            // ->withGlobalSearch()

            // ->bulkAction()
            // ->export()
    }
}
