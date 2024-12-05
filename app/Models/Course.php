<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    // In app/Models/Course.php
    public function instructor() {
    return $this->belongsTo(User::class, 'user_id');
    }

    public function activities() {
    return $this->hasMany(Activity::class);
    }

}
