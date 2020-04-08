<?php

use App\Respondents\CovidcasesRespondent;
use App\Respondents\DonateRespondent;
use App\Respondents\GreetRespondent;
use App\Respondents\LatestNumbersRespondent;
use App\Respondents\MainMenuRespondent;
use App\Respondents\MythBustersRespondent;
use App\Respondents\NewsAndPressRespondent;
use App\Respondents\ProtectYourselfRespondent;
use App\Respondents\ShareRespondent;
use App\Respondents\TravelAdviceRespondent;
use App\Respondents\YourQuestionsAnsweredRespondent;

return [
    "respondents" => [
        GreetRespondent::class,
        // LatestNumbersRespondent::class,
        // ProtectYourselfRespondent::class,
        // YourQuestionsAnsweredRespondent::class,
        // MythBustersRespondent::class,
        // TravelAdviceRespondent::class,
        // NewsAndPressRespondent::class,
        ShareRespondent::class,
        // DonateRespondent::class,
        // MainMenuRespondent::class,
        CovidcasesRespondent::class,
    ]
];
