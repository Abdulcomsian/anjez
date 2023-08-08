<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = (new User());
        $user->first_name   = "Admin";
        $user->last_name    = null;
        $user->email        = "admin@gmail.com";
        $user->phone_no     = "03101231231";
        $user->type         = "Admin";
        $user->password     = Hash::make('password');
        $user->save();
        $user = (new User());
        $user->first_name   = "user";
        $user->last_name    = null;
        $user->email        = "user@domain.com";
        $user->phone_no     = "03152897445";
        $user->type         = "Student";
        $user->password     = Hash::make('12345678');
        $user->save();
    }
    
}
