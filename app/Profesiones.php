<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesiones extends Model
{
	protected $table = 'profesiones';
	
	protected $fillable = ['profesion'];
}
