<?php

namespace App\Factories;

use App\Respondents\InvalidKeywordRespondent;

class WHORespondentFactory
{
    protected $respondent;

    public function __construct($phonenumber, $message)
    {
        $this->saveContact($phonenumber);
        $this->respondent = $this->resolveRespondent($message);
    }

    public static function create()
    {
        $self =  new static(
            request()->input('From'),
            request()->input('Body')
        );

        return $self->respondent;
    }

    public function saveContact($phonenumber)
    {
        return User::firstOrCreate([
            "phonenumber" => $phonenumber
        ]);
    }

    protected function normalizeMessage($message)
    {
        if (strcasecmp($message, "hi") === 0) {
            return trim(strtolower($message));
        }

        if (strlen($message) === 2) {
            return strtoupper($message);
        }

        return $message;
    }

    public function resolveRespondent($message)
    {
        $message =  $this->normalizeMessage($message);

        $respondents = $this->getRepondents();
        foreach ($respondents as $respondent) {
            if ($respondent::shouldRespond($message)) {
                return new $respondent($message);
            }
        }
        return new InvalidKeywordRespondent($message);
    }

    public function getRepondents()
    {
        return config('who.respondents');
    }
}
