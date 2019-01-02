<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable =  [
    	'share_name',
    	'share_price',
    	'stock_qty'
    ];
}
