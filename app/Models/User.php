<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    const TYPE_USER = 'user';
    const TYPE_TEACHER = 'teacher';
    const TYPE_CONSULTANT = 'consultant';
    const TYPE_PEDIATRICIAN = 'pediatrician';
    const TYPE_PSYCHOLOGIST = 'psychologist';

    public static function getTypes()
    {
        return [
            self::TYPE_USER,
            self::TYPE_TEACHER,
            self::TYPE_CONSULTANT,
            self::TYPE_PEDIATRICIAN,
            self::TYPE_PSYCHOLOGIST,
        ];
    }
}
