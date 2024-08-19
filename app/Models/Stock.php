<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// class Stock extends Model
// {
//     use HasFactory;
// }
class Stock extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'quantity',
        'product_id',
        'stock_status',
    ];

    protected function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
