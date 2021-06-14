<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderutp extends Model
{
	use HasFactory;

	protected $fillable = ['dateenter', 'dateout', 'adult', 'children', 'name', 'phone', 'nomer'];
}
