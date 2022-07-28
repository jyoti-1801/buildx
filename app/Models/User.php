<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    

     public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }


     public function setPasswordAttribute($password)
    {
        if ( $password !== null & $password !== "" ) {
            $this->attributes['password'] = bcrypt($password);
        }
    }

    
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }

     public function phase()
    {
        return $this->hasMany(Phase::class);
    }

     public function quote()
    {
        return $this->hasMany(Quote::class);
    }

    public function businessDetails()
    {
        return $this->hasMany(BusinessDetails::class);
    }

    public function labour()
    {
        return $this->hasMany(LabourRate::class);
    }

     public function document()
    {
        return $this->hasMany(Document::class);
    }


     public function photo()
    {
        return $this->hasMany(Photo::class);
    }


      public function import_folder()
    {
        return $this->hasMany(ImportFolder::class);
    }


      public function video()
    {
        return $this->hasMany(Video::class);
    }


    
}
