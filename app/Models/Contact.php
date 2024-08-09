<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
        // return $this->belongsToMany(User::class);//many to many

        //hasOne Of Many
        // return $this->hasOne(User::class)->latestOfMany();
        // return $this->hasOne(User::class)->oldestOfMany();

        // return $this->hasmany(User::class);
    }
}
