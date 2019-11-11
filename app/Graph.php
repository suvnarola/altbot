<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
    protected $table = 'graph_data';

    protected $fillable = [
        'date', 'time', 'equity', 'type'
    ];

    public $timestamps = false;
}
