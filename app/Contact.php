<?php

namespace App;

use App\Group;
use App\Note;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function note()
    {
        return $this->hasOne(Note::class);
    }
}
