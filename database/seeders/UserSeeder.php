<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Simon',
            'lastname' => 'Rodil',
            'username' => 'simonrodil',
            'email' => 'rodileduar.simon@gmail.com',
            'password' => Hash::make('231223564556'),
        ]);

        User::factory()->count(4)->create();
    }
}
