<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\ProductImage;


class Product extends Model
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



	protected $fillable = [
		'title',
		'slug',
		'avatar',
		'short',
		'price',
		'pics',
		'descr',
		'is_wifi',
		'is_saife',
		'is_conditioner',
		'is_bar',
		'is_tv',
		'is_garderob',
		'is_utug',
		'is_gladilka',
		'is_otoplenie',
		'is_kover',
		'is_kattle',
		'is_table',
		'is_sputniktv',
		'is_balkon',
		'is_rosetka',
		'is_kitchen',
		'is_stiralka',
		'is_holodilnik',
		'is_kofemachina',
		'is_mikrovolnovka',
		'is_tarelki',
		'is_posudomoika',
		'is_electrplitka',
		'is_obedennytable',
		'is_sofa',
		'is_gostugolok',
		'is_kamin',
		'is_terassa',
		'is_selfbasein',
	];



 

	public function slides()
	{
		return $this->hasMany(ProductImage::class);
	}









	#
}
