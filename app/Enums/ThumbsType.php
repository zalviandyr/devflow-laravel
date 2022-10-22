<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum ThumbsType: string {
    use EnumTrait;

    case UP = 'UP';
    case DOWN = 'DOWN';
}
