<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class orderline extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',

    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(order::class);
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(product::class);
    }
}
