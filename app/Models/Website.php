<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function checks()
    {
        return $this->hasMany(Check::class);
    }

    public function latestCheck()
    {
        return $this->hasOne(Check::class)->latestOfMany();
    }
}
