<?php

namespace App\Enums;

use App\Http\Traits\EnumTrait;

enum UserRole: string {
    use EnumTrait;

    case ADMIN = 'ADMIN';
    case USER = 'USER';
}
