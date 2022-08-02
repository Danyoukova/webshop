<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_name',
        'price',
        'image',
    ];

    public function orderline(): HasOne
    {
        return $this->hasOne(orderline::class);
    }
    public function productCategory(): HasOne
    {
        return $this->hasOne(productCategory::class);
    }
}
