<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tonysm\RichTextLaravel\Attachables\AttachableContract;
use Tonysm\RichTextLaravel\Attachables\Attachable;

class User extends Authenticatable implements AttachableContract
{
    use HasApiTokens, HasFactory, Notifiable;
    use Attachable;

    public function richTextRender(array $options = []): string
    {
        return view('users._mention', [
            'user' => $this,
        ])->render();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'user_type',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}