<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class MainMenuRespondent extends Respondent
{
    public static function shouldRespond($message)
    {
        return $message === Keywords::MAIN_MENU;
    }

    public function respond()
    {
        return Conversations::MAIN_MENU;
    }
}
