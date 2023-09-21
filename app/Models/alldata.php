<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alldata extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'name',
        'surename',
        'eye_color',
        'eye_lenght',
        'eye_astig',
        'body_response',
        'signs_traff',
        'lines_traff',
        'give_way',
        'statuswork',
    ];
}
