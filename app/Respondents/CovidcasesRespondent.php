<?php

namespace App\Respondents;

use App\Constants\Conversations;
use App\Constants\Keywords;
use App\Covidcases;
use App\Http\Resources\CovidcasesResource;

class CovidcasesRespondent extends Respondent
{
    public static function shouldRespond($message)
    {
        $message = ucwords($message);
        return in_array($message, config("countriesandcodes"));
    }

    public function respond()
    {
        $query = Covidcases::query()
            ->where('confirmed', '>', 0)
            ->whereCountry($this->countryOrCountryCode ?? 'NG');

        $cases = $query->first();

        $conversation =  Conversations::COVID19_CASES;

        foreach ($this->buildConvo($cases->toArray()) as $key => $value) {
            $conversation = str_replace($key, $value, $conversation);
        }
        return $conversation;
    }

    protected function buildConvo($cases)
    {
        $country_r = $cases["country"];
        $country_code = $cases["country_code"];
        $confirmed_r = $cases["confirmed"];
        $deaths_r = $cases["deaths"];
        $recovered_r = $cases["recovered"];

        return compact(
            'country_r',
            'country_code',
            'confirmed_r',
            'deaths_r',
            'recovered_r'
        );
    }
}
