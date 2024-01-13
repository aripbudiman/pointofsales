<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user1=\App\Models\User::factory()->create([
            'name' => 'Arip Budiman',
            'email' => 'it@test.com',
            'password' => Hash::make('123456'),
        ]);
        Employee::create([
            'user_id'=>$user1->id,
            'first_name'=>'Arip',
            'last_name'=>'Budiman',
            'position'=>'Developer',
        ]);
        $user2=\App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('123456'),
        ]);
        Employee::create([
            'user_id'=>$user2->id,
            'first_name'=>'Admin',
            'last_name'=>'Admin',
            'position'=>'Admin',
        ]);
        $user=\App\Models\User::factory()->count(10)->create([
            'password' => Hash::make('123456'),
        ]);
        foreach($user as $u){
            Employee::factory()->create(['user_id'=>$u->id]);
        }
        
    }
}
