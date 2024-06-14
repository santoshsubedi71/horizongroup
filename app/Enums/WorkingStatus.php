<?php

namespace App\Enums;

enum WorkingStatus: int {
    case NEWWORK = 1;
    case CAREERCHANGE = 2;
    case NOGRADUATION = 3;

    public function label(): string {
        return match ($this) {
            self::NEWWORK => '就職',
            self::CAREERCHANGE => '転職',
            self::NOGRADUATION => '卒業見込み',
        };
    }

    public function prefix(): string {
        return match ($this) {
            self::NEWWORK => 'HS',
            self::CAREERCHANGE => 'HT',
            default => 'XX', 
        };
    }
}

?>