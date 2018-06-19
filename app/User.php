<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use APP\Curso;
use APP\User;
use APP\Ensenanza;
use APP\Estudiante;
use DB;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email','role', 'password', 'ip'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

 public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
      /**
     *   @param  string  $token
     * @return void
     */

    public function hasRoles(array $roles)
    {
        foreach ($roles as $role) 
        {
            if ($this->role === $role) 
            {
          return true;
            }
   
        }
    return false;
    }





    
}
