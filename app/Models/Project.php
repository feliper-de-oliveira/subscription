<?php

namespace App\Models;

use App\Models\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;
    use HasUlids;

    protected $casts = [
        'status' => ProjectStatus::class,
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'project_users',
            'project_id',
            'user_id'
        )->withPivot('role')
            ->withTimestamps();
    }

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
