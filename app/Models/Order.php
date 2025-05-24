<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_name',
        'quantity',
        'total',
        'status',
        'user_id'
    ];

    // Relationship to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $casts = [
        'status' => 'string',
    ];
}
