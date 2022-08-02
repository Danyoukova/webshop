<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class order extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'total_amount',
        'vat_amount',
        'date',
    ];

    public function address(): BelongsToMany
    {
        return $this->belongsToMany(address::class);
    }

    public function orderLine(): HasMany
    {
        return $this->hasMany(orderline::class);
    }
    public function customer(): BelongsTo
    {
        return $this->belongsTo(customer::class);
    }
}
