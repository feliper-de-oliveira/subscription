<?php

namespace App\Enums\Traits;

trait Values
{
    public static function values(): array
    {
        return collect(self::cases())
            ->map(fn (self $value) => $value->value)
            ->toArray();
    }
}
