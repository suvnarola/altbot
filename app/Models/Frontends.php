<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frontends extends Model
{
    protected $guard = 'frontend';

    protected $fillable = [
        'name', 'surname', 'email',  'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
