<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    // Add Many to One relationship. Listing belongs to a User.
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
