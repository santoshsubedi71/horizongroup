<?php

namespace App\Enums;

enum jlptLevel: int{

    case none = 0;
    case N1 = 1;
    case N2 = 2;
    case N3 = 3;
    case N4 = 4;
    case N5 = 5;

    public function label(): string
    {

        return match ($this){
            self::none => '無し',
            self::N1 => 'n1',
            self::N2 => 'n2',
            self::N3 => 'n3',
            self::N4 => 'n4',
            self::N5 => 'n5',

        };
    }
}








?>