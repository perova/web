<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{

	  public $fillable =[
   			'status',
            'type',
            'settlement',
            'district',
            'street',
            'price',
            'broker'
            ];
}
