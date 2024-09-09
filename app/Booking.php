<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{


    // The table associated with the model
    protected $table = 'booking';

    // The attributes that are mass assignable
    protected $fillable = ['name', 'email', 'phone', 'slot_id', 'message','services'];

    /**
     * Get the slot associated with the booking.
     */
    public function slot()
    {
        return $this->belongsTo(Slot::class, 'slot_id');
    }
}
