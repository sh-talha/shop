<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{

	return $this->belongsTo('App\Product');
}
