<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    //inserire nelle quadre valore che non si vuole salvare nel db
    //protected $guarded = [];

   protected $fillable = ['title', 'description', 'image', 'type', 'price','sale_date','series' ];
}
