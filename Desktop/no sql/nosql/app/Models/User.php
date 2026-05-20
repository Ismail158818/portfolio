<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use MongoDB\Laravel\Eloquent\Model;

/**
 * @property string|null $role Admin|Uploader|Reader
 * @property \Illuminate\Support\Carbon|null $last_login_at
 */
class User extends Model implements AuthenticatableContract
{
    use Authenticatable, HasFactory, HasApiTokens, Notifiable;

    protected $connection = 'mongodb';

    protected $guard_name = 'web';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'download_count',
        'read_count',
        'last_login_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getRoleAttribute(?string $value): ?string
    {
        if (! empty($value)) {
            return $value;
        }

        $roles = $this->attributes['roles'] ?? null;

        if (is_array($roles) && $roles !== []) {
            return (string) $roles[0];
        }

        return null;
    }

    public function digitalItems()
    {
        return $this->hasMany(DigitalItem::class, 'uploaded_by');
    }
}
