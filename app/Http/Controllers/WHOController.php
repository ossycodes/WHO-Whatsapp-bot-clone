<?php

namespace App\Http\Controllers;

use Twilio\TwiML\MessagingResponse;
use App\Factories\WHORespondentFactory;

class WHOController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(MessagingResponse $messageResponse)
    {
        $respondent = WHORespondentFactory::create();

        $messageResponse->message($respondent->respond());

        return response($messageResponse, 200)->header(
            'Content-Type',
            'text/xml'
        );
    }
}
