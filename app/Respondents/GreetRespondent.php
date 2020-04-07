<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class GreetRespondent extends Respondent
{
    public static function shouldRespond($message)
    {
        return $message === Keywords::GREET;
    }

    public function respond()
    {
        return Conversations::GREET;
    }
}
