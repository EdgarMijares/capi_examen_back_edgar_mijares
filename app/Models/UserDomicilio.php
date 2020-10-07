<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDomicilio extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'domicilio',
        'numero_exterior',
        'colonia',
        'cp',
        'ciudad'
    ];

    protected $hidden = [
        'user_id',
    ];
}
