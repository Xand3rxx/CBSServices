<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Booking extends Model
{
    use SoftDeletes;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['uuid', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        // Create a uuid when a new Booking Request is to be created
        static::creating(function ($booking) {
            // Create a Unique Service booking uuid
            $booking->uuid = (string) Str::uuid();
        });
    }
}
