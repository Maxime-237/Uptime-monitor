<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $fillable = [
        'website_id',
        'status',
        'response_time',
        'status_code',
    ];

    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
