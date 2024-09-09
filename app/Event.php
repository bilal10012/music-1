<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Concerns\SupportsDefaultModels;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Event extends Model
{
    use SoftDeletes;
    protected $table = 'events';
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function($event) {
            $count = 0;
            do {
                $event->slug = Str::slug($event->title, '-').(($count > 0)? '-'.$count: '');
                $duplicated = Self::whereSlug($event->slug)->first();
                $count++;
            } while($duplicated != null);
        });
    }
}
