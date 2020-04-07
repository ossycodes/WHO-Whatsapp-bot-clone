<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class MythBustersRespondent extends Respondent
{
    public static function shouldRespond($message)
    {
        return $message === Keywords::MYTH_BUSTERS;
    }

    public function respond()
    {
        return Conversations::MYTH_BUSTERS;
    }
}
