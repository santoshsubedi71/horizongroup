<?php

namespace App\Enums;

enum visaStatus: int {

    case STUDENT = 1;
    case TechnicalProfessional = 2;
    case FamilyStay = 3;
    case SpecificSkills = 4;
    case SpecialActivities = 5;
    case Skills = 6;

 


    public function label(): string
    {

        return match ($this){

            self::STUDENT => '留学',
            self::TechnicalProfessional => '技術人 . 文知識 . 国際業務',
            self::SpecialActivities => '特定活動',
            self::SpecificSkills => '特定技能',
            self::FamilyStay => '家族滞在',
            self::Skills=> '技能' 

        };

    }
}







?>