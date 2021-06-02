<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable=[
        'studentname','class','bdate','rollno', 'subject','date', 'time', 'Answer', 'status'
    ];
}
