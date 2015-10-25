<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Traits\ErrorTrait;

class BaseModel extends Model {

	use ErrorTrait;

	static function boot()
	{
		parent::boot();
		Static::observe(new BaseObserver);
	}
	
}