<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class TravelAdviceRespondent extends Respondent
{
    public static function shouldRespond($message)
    {
        return $message === Keywords::TRAVEL_ADVICE;
    }

    public function respond()
    {
        return Conversations::TRAVEL_ADVICE;
    }
}
