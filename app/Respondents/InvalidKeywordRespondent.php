<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class InvalidKeywordRespondent extends Respondent
{
    public static function shouldRespond($message)
    {
        return true;
    }

    public function respond()
    {
        return Conversations::INVALID_KEYWORD;
    }
}
