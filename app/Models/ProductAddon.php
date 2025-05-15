<?php

namespace App\Models;

use App\Models\Enums\ProductAddonStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductAddon extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => ProductAddonStatus::class,
        'metadata' => 'json',
    ];

    public function product() : BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
