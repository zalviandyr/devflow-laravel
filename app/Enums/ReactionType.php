<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum ReactionType: string {
    use EnumTrait;

    case UP = 'UP';
    case DOWN = 'DOWN';
}
