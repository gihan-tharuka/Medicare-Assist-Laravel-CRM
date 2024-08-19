<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Subscription as CashierSubscription;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'stripe_plan',
        'price',
        'description',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function subscriptions()
    {
        return $this->hasMany(CashierSubscription::class, 'type');
    }
}
