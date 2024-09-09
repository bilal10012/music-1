<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Concerns\SupportsDefaultModels;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Blog extends Model
{
    use SoftDeletes;
    protected $table = 'blogs';
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function($blog) {
            $count = 0;
            do {
                $blog->slug = Str::slug($blog->title, '-').(($count > 0)? '-'.$count: '');
                $duplicated = Self::whereSlug($blog->slug)->first();
                $count++;
            } while($duplicated != null);
        });
    }
}
