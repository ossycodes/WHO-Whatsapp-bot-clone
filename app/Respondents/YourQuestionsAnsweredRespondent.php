<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;

class YourQuestionsAnsweredRespondent extends Respondent
{
    public static function shouldRespond($message)
    {
        return $message === Keywords::YOUR_QUESTION_ANSWERED;
    }

    public function respond()
    {
        return Conversations::YOUR_QUESTIONS_ANSWERED;
    }
}
