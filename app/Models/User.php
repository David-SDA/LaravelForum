<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
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
        'role',
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

    /**
     * Relation avec le Topic : un user peut avoir plusieurs topics
     */
    public function topics(){
        return $this->hasMany(Topic::class);
    }

    /**
     * Relation avec post : un user peut avoir plusieurs posts
     */
    public function posts(){
        return $this->hasMany(Post::class);
    }

    /**
     * Verify if user has un certain role
     * 
     * @param string $role
     * @return bool
     */
    public function hasRole(string $role): bool{
        return $this->role === $role;
    }
}
