<?php

namespace App;

use App\Contact;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
