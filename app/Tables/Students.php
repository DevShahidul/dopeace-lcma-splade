<?php

namespace App\Tables;

use App\Models\City;
use App\Models\Country;
use App\Models\LearningCenter;
use App\Models\State;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class Students extends AbstractTable
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

        // return Student::query();

        $globalSearch = AllowedFilter::callback('global', function ($query, $value){
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query->orWhere('first_name', 'LIKE', "%{$value}%")->orWhere('last_name', 'LIKE', "%{$value}");
                });
            });
        });

        return QueryBuilder::for(Student::class)->defaultSort('id')->allowedSorts(['id', 'first_name', 'last_name'])->allowedFilters(['id', 'first_name', 'last_name', 'country_id', 'state_id', 'city_id', 'learning_center_id', $globalSearch]);
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
            ->withGlobalSearch(columns: ['id', 'first_name', 'last_name', 'country_id', 'state_id', 'city_id', 'learning_center_id'])
            ->column('id', sortable: true)
            ->column('action', exportAs: false)
            ->column('first_name', sortable: true)
            ->column('last_name', sortable: true)
            ->column('fathers_name', sortable: true)
            ->column('mothers_name', sortable: true)
            ->column('gender')
            ->column('birth_date')
            ->column('age')
            ->column(key: 'country.name', label: 'Country', sortable: true)
            ->column(key: 'state.name', label: 'State', sortable: true)
            ->column(key: 'city.name', label: 'City')
            ->column('zip_code')
            ->column('address')
            ->column('phone')
            ->column('email')
            ->column('facebook_url')
            ->column('whatsapp_number')
            ->selectFilter(
                key: 'country_id',
                options: Country::all()->pluck('name', 'id')->toArray(),
                label: 'Country'
            )
            ->selectFilter(
                key: 'state_id',
                options: State::all()->pluck('name', 'id')->toArray(),
                label: 'State'
            )
            ->selectFilter(
                key: 'city_id',
                options: City::all()->pluck('name', 'id')->toArray(),
                label: 'City'
            )
            ->selectFilter(
                key: 'learning_center_id',
                options: LearningCenter::all()->pluck('name', 'id')->toArray(),
                label: 'Learning center'
            )
            ->bulkAction(
                label: 'Delete Selected Students',
                each: fn (Student $student) => $student->delete(),
                confirm: 'Are you sure you want to delete the selected Students?',
                confirmButton: 'Delete',
                cancelButton: 'Cancel',
                after: fn () => Toast::info('Students deleted successfully!'),
            )
            ->export()
            ->paginate(15);

            // ->searchInput()
    }
}
