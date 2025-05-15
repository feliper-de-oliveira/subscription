<?php

declare(strict_types=1);

namespace App\Models\Enums;

use App\Enums\Traits\Values;

enum ProductAddonStatus : int
{

    use Values;
    case Inactive = 0;
    case Active = 1;


}
