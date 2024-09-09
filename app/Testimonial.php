<?php

namespace App;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'review_slider';
    protected $guarded = [];
}
