<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    //relation entre user et roles
    public function r_user_role()
    {
        return $this->belongsToMany(Roles::class, "user_role", "user_id", "role_id");
    }
    //vérifier si un user a un role(renvoir true ou false)
    public function hasRole($role)
    {
        return $this->r_user_role()->where("name", $role)->first() !== null;
    }
    //vérifier si un user a plusieurs roles(renvoir true ou false)

    public  function getType()
    {
        $user = auth()->user()->user_type;
        if ($user == 1) {
            return 'bureau';
        } elseif ($user == 2) {
            return 'client ';
        } elseif ($user == 3) {
            return 'partener';
        }
    }
    //vérifier si un user a plusieurs roles(renvoir true ou false)
    public function hasAnyRoles($roles)
    {
        return $this->r_user_role()->whereIn("name", $roles)->first() !== null;
    }

    public function getAllRoleNamesAttribute()
    {
        return $this->roles->implode("name", ' | ');
    }
}
