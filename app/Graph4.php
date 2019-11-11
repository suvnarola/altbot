<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph4 extends Model
{
    protected $table = 'graph_data4';

    protected $fillable = [
        'date', 'time', 'equity', 'type'
    ];

    public $timestamps = false;
}
