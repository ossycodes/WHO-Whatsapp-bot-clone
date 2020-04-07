<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class LatestNumbersRespondent extends Respondent
{
    public static function shouldRespond($message)
    {
        return $message === Keywords::LATEST_NUMBERS;
    }

    public function respond()
    {
        return Conversations::LATEST_NUMBERS;
    }
}
