<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class NewsAndPressRespondent extends Respondent
{
    public static function shouldRespond($message)
    {
        return $message === Keywords::NEWS_AND_PRESS;
    }

    public function respond()
    {
        return Conversations::NEWS_AND_PRESS;
    }
}
