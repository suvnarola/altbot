<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph2 extends Model
{
    protected $table = 'graph_data2';

    protected $fillable = [
        'date', 'time', 'equity', 'type'
    ];

    public $timestamps = false;
}
