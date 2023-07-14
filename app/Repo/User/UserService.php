<?php

namespace App\Repo\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserService implements UserInterface
{
    public function store($request)
    {
        $user = (new User());
        DB::transaction(function () use($user, $request) {
            $user->first_name   = $request['first_name'] ?? null;
            $user->last_name    = $request['last_name'] ?? null;
            $user->email        = $request['email'] ?? null;
            $user->phone_no     = $request['phone_no'] ?? null;
            $user->password     = Hash::make($request['password']) ?? null;
            $user->save();
        });
        return $user ? $user : false;
    }
}
