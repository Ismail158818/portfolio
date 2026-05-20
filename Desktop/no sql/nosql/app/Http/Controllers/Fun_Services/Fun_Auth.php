<?php

namespace App\Http\Controllers\Fun_Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Fun_Auth
{
    public function register_user_services(array $data): User
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'Reader',
        ]);
    }
}
