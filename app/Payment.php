<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $fillable = ['user_id', 'item_number', 'transaction_id', 'currency_code', 'payment_status'];

    public function user()
    {
        
        return $this->belongsTo("App\User", "user_id", 'id');
    }
}
