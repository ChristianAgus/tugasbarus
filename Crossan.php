<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crossan extends Model
{
    protected $fillable = ['title', 'description', 'status','price','file', 'quantity', 'total'];
}
