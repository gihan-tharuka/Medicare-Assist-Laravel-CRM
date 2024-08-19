<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    //user_id,type,stripe_id,stripe_status,stripe_plan,quantity,created_at
    protected $fillable = [
        'user_id',
        'type',
        'stripe_id',
        'stripe_status',
        'stripe_plan',
        'quantity',
        'created_at',
    ];

    //user relationship with foreign key of user_id
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //plan relationship with foreign key of type
    public function plan()
    {
        return $this->belongsTo(Plan::class, 'type');
    }

    //items method which return the subscriptions not a relationship
    // public function items()
    // {
    //     return $this->hasMany(Subscription::class, 'subscription_id');
    // }





}
