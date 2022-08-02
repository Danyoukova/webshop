<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class categorySubcategory extends Model
{
    use HasFactory;

    public function productCategory(): HasOne
    {
        return $this->hasOne(productCategory::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }
    public function subcategory(): BelongsToMany
    {
        return $this->belongsToMany(subcategory::class);
    }
}
