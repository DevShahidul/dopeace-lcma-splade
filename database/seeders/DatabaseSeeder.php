<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call([
            CountrySeeder::class,
            ClassesSeeder::class
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        User::factory(100)->create();
        $role = Role::create(['name' => 'admin']);

        $user = User::factory()->create([
            'first_name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);
        $user->assignRole($role);
    }
}
