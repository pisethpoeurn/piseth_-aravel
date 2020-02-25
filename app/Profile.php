<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone', 'address',
    ];

    public function user(){
        return $this->belongsTo(user::class);
    }
}
