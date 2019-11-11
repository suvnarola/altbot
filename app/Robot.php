<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    public $fillable = ['user_id', 'investment', 'monthly_return', 'account_number', 'broker'];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
