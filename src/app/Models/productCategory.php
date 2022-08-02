<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class productCategory extends Model
{
    use HasFactory;

    public function product(): BelongsToMany
    {
        return $this->belongsToMany(product::class);
    }
    public function categorySubcategory(): BelongsTo
    {
        return $this->belongsTo(categorySubcategory::class);
    }
}
