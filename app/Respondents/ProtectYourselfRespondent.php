<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class ProtectYourselfRespondent extends Respondent
{
    public static function shouldRespond($message)
    {
        return $message === Keywords::PROTECT_YOURSELF;
    }

    public function respond()
    {
        return Conversations::PROTECT_YOURSELF;
    }
}
