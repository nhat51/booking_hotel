<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name'=>'Admin User',
            'email'=>'spstetho@gmail.com',
            'password'=>Hash::make('12345678')
        ]);
        $author = User::create([
            'name'=>'Author User',
            'email'=>'author@author.com',
            'password'=>Hash::make('12345678')
        ]);
        $user = User::create([
            'name'=>'Generic User',
            'email'=>'user@user.com',
            'password'=>Hash::make('12345678')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);

    }
}
