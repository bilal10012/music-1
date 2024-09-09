<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Slider extends Model
{   
    protected $table = "slider";
    protected $fillable = [
        
        'primary_image', 'title', 'slider',
    ];
}
