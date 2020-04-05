<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
   protected $fillable=[
   	'que','opt1','opt2','opt3','opt4','ans','confans',
   ];
}
