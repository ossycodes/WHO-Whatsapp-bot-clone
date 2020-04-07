<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class ShareRespondent extends Respondent
{
    public static function shouldRespond($message)
    {
        return $message === Keywords::SHARE;
    }

    public function respond()
    {
        return Conversations::SHARE;
    }
}
