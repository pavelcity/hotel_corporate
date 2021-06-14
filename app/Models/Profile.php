<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Profile extends Model
{
	use HasFactory;
	use Sluggable;

	public function sluggable(): array
	{
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}

	protected $fillable = ['title', 'subtitle', 'slug', 'phone', 'phonetwo', 'phonefortelegram', 'baner', 'avatar', 'logo', 'email', 'adress', 'usloviabrony', 'politics', 'map'];
}
