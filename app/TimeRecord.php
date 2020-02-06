<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeRecord extends Model
{
    protected $table="time_records";
    protected $fillable=[
        'clock_in',
        'clock_out',
        'break_start',
        'break_end',
        'total_time_worked',
        'total_breaks_used',
        'is_in',
        'is_out',
        'is_break_started',
        'is_break_ended',      
    ];
    protected $hidden=[

    ];
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
