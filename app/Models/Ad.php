<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['title', 'content', 'price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
