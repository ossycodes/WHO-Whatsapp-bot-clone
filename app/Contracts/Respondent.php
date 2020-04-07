<?php

namespace App\Contracts;

interface Respondent
{
    public static function shouldRespond($message);

    public function respond();
}
