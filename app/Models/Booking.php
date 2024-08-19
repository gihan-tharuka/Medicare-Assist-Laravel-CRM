<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'email',
        'mobile',
        'gender',
        'status',
        'date',
        'time',

    ];
    //user relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
