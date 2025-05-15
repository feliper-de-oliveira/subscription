<?php

declare(strict_types=1);

namespace App\Models\Enums;

use App\Enums\Traits\Values;

enum SubscriptionStatus : int
{

    use Values;
    case Inactive = 0;
    case Active = 1;

    case Trial = 2;

    case Expired = 3;


}
