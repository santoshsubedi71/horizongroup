<?php

namespace App\Enums;

enum MaritalStatus: int {
    case SINGLE = 1;
    case MARRIED = 2;
    case OTHERS = 3;
  

    public function label(): string {
        return match($this) {
            self::SINGLE => 'Single',
            self::MARRIED => 'Married',
            self::OTHERS => 'Divorced',
        };
    }
}



?>