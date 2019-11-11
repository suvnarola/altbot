<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph3 extends Model
{
    protected $table = 'graph_data3';

    protected $fillable = [
        'date', 'time', 'equity', 'type'
    ];

    public $timestamps = false;
}
