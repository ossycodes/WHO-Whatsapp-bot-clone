<?php

namespace App\Respondents;

use App\Contracts\Respondent as RespondentContract;

abstract class Respondent implements RespondentContract
{
    public function __construct($message)
    {
        $this->countryOrCountryCode = $message;
    }
}
