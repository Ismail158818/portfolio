<?php

namespace App\Http\Controllers\Fun_Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;

class Fun_Admin
{
    public function list_users_services(): Collection
    {
        return User::orderByDesc('created_at')->get();
    }

    public function save_user_services(array $data): User
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'Uploader',
        ]);
    }

    public function assign_uploader_services(User $user): ?string
    {
        if ($user->role === 'Admin') {
            return 'Admin users already have full access.';
        }

        $user->update(['role' => 'Uploader']);

        return null;
    }

    public function assign_reader_services(User $user): ?string
    {
        if ($user->role === 'Admin') {
            return 'Admin users cannot be demoted.';
        }

        $user->update(['role' => 'Reader']);

        return null;
    }

    public function delete_user_services(User $user, string $currentUserId): ?string
    {
        if ($currentUserId === $user->id) {
            return 'You cannot delete your own account from this screen.';
        }

        $user->delete();

        return null;
    }
}
