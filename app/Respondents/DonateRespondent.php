<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class DonateRespondent extends Respondent
{
    public static function shouldRespond($message)
    {
        return $message === Keywords::DONATE;
    }

    public function respond()
    {
        return Conversations::DONATE;
    }
}
