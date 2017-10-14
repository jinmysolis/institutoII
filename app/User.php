<?php

namespace App;
use App\Empresa;
use App\Pempresa;
use App\Empleo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','apellidos','pais','tipoCuenta'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function empresas()
    {
        return $this->hasMany(Empresa::class);
    }
    
    public function empleos()
    {
        return $this->hasMany(Pempresa::class);
    }
    
    public function curriculum()
    {
        return $this->hasMany(Empleo::class);
    }
}
