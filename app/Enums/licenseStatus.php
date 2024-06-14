<?php

namespace  App\Enums;

enum licenseStatus: int
{

    
    case NO = 0;
    case YES = 1;

    public function label(): string
    {

        return match ($this){
            
            self::NO  => '無し',
            self::YES  => '有り',
        };
    }
}









?>