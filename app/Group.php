<?php

namespace App;

use App\Contact;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function contacts() 
    {
        return $this->hasMany(Contact::class);
    }
}
