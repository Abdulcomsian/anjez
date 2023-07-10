<?php

namespace App\Repo\Auth;

interface AuthInterface
{
    public function signupUser ($request);

    public function login ($request);
}
