<?php

namespace App\Models;


use App\Enums\AppointmentReason;
use App\Enums\AppointmentStatus;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['date', 'time', 'status', 'reason'];

    protected $casts = [
        'status' => AppointmentStatus::class,
        'reason' => AppointmentReason::class,
    ];
}
