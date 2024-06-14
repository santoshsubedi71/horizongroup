<?php

namespace App\Enums;

enum Process: int {

    case NO_REGISTER = 0;
    case REGISTERED = 1;
    case RESUME_PREPARING = 2;
    case INTERVIEW_PROCESS = 3;
    case INTERVIEW_FINISHES = 4;
    case WAITING_RESULT = 5;
    case INTERVIEW_PASS = 6;
    case PROCESS_FINISHED = 7;
    

    public function label(): string
    {
        return match ($this){

        self::NO_REGISTER => '未登録',
        self::REGISTERED => '登録済',
        self::RESUME_PREPARING => '履歴書作成中',
        self::INTERVIEW_FINISHES => '面接済',
        self::WAITING_RESULT => '結果待ち',
        self::INTERVIEW_PASS => '内定取得',
        self::PROCESS_FINISHED =>'対応完了',

        };

    }
    
}










?>