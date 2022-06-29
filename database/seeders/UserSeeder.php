<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=> 'Julius Jess Estose',
                'email'=>'estosejuliusjess@gmail.com',
                'email_verified_at'=> Carbon::now(),
                'password'=>bcrypt('password123')

            ],
            [
                'name'=> 'Tammy Alcantara',
                'email'=>'tammy@gmail.com',
                'email_verified_at'=> Carbon::now(),
                'password'=>bcrypt('password123')

            ],
            [
                'name'=> 'Kennan Mediano',
                'email'=>'kennan@gmail.com',
                'email_verified_at'=> Carbon::now(),
                'password'=>bcrypt('password123')

            ],
            [
                'name'=> 'Neldon Casol',
                'email'=>'neldon@gmail.com',
                'email_verified_at'=> Carbon::now(),
                'password'=>bcrypt('password123')

            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
