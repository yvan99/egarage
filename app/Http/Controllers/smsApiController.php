<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class smsApiController extends Controller
{
    //
    public function sendSms($receiver, $message)
    {
        $data = array(
            "sender"     => env("INTOUCH_SENDER"),
            "recipients" => $receiver,
            "message"    => $message,
        );

        $url      = env("INTOUCH_API");
        $data     = http_build_query($data);
        $username = env("INTOUCH_USERNAME");
        $password = env("INTOUCH_PASSWORD");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        $httpResponse = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($httpResponse != 200) {
            # code...
            return $httpResponse . 'SMS system error ,SMS not send';
            exit;
        } else {
            error_log($result);
            return $result;
        }
    }
}
