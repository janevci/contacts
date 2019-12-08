<?php

namespace App;

use App\Group;
use App\Note;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['first_name', 'last_name', 'address', 'city', 'zip','country','email','phone', 'group_id'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function note()
    {
        return $this->hasOne(Note::class);
    }
}
