<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Booking;
class Slot extends Model
{


    // The table associated with the model
    protected $table = 'slots';

    // The attributes that are mass assignable
    protected $fillable = ['date', 'booking_id'];

    /**
     * Get the booking associated with the slot.
     */
    public function booking()
    {
        return $this->hasOne(Booking::class, 'slot_id');
    }
}
