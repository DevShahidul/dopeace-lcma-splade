<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classes::factory()
        ->count(10)
        ->sequence(fn ($sequence) => ['name' => 'Class ' . $sequence->index + 1])
        ->has(
            Section::factory()
            ->count(4)
            ->state(
                new Sequence(
                    ['name' => 'Section A'],
                    ['name' => 'Section B'],
                    ['name' => 'Section C'],
                    ['name' => 'Section D'],
                )
            )
        )
        ->create();
    }
}
