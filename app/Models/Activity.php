<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //

    // In app/Models/Activity.php
    public function course() {
    return $this->belongsTo(Course::class);
    }
}
