<?php

declare(strict_types=1);

namespace App\Models\Enums;

use App\Enums\Traits\Values;

enum ProjectCurrencyTypes : int
{

    use Values;
    case USD = 0;
    case BRL = 1;


}
