<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PDF extends Model
{
    protected $fillable = [
    	'cargo_id',
    	'setor_id',
    ];
}
