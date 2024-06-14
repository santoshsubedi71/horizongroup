<?php

namespace App\Enums;

enum educationLevel: int 
{

    case SENMON = 1;
    case UNIVERCITY = 2;
    case SHORT_UNIVERSITY = 3;
    case MASTER = 4;
    case SELF_UNIVERSITY = 5;


    public function label(): string{

        return match ($this){

            self::SENMON => '専門学校',
            self::UNIVERCITY => '大学',
            self::SHORT_UNIVERSITY => '短期大学',
            self::MASTER => '大学院',
            self::SELF_UNIVERSITY => '母国大学',

        };
    }

}








?>