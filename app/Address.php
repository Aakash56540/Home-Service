<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=['firstName','lastName','address1','address2','country','state','zipcode'];
}
