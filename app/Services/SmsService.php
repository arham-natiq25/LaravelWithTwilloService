<?php

namespace App\Services;

use Twilio\Rest\Client;

class SmsService
{
    protected static $client;

    public function __construct()
    {
        self::$client = new Client(env('TWILIO_SID'), env('TWILIO_TOKEN'));
    }

    public static function sendSms($to, $message)
    {
        if (self::$client === null) {
            self::$client = new Client(env('TWILIO_SID'), env('TWILIO_TOKEN'));
        }
        $to = '+923226277800';
        self::$client->messages->create($to, [
            'from' => env('TWILIO_FROM'),
            'body' => 'Hello Arham , You are using message service',
        ]);
    }
}
