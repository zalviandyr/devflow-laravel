<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum UserRole: string {
    use EnumTrait;

    case ADMIN = 'ADMIN';
    case USER = 'USER';
}
