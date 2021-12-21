<?php

namespace App\Services;

class CurrencyConverter
{
    public function getConverter()
    {
        // $url = "https://freecurrencyapi.net/api/v2/latest?apikey=4743ccb0-5c16-11ec-87ca-e5343f1c2775&base_currency=USD";
        // $url = "https://freecurrencyapi.net/api/v1/rates?base_currency=USD";
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // curl_setopt($ch, CURLOPT_HEADER, FALSE);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // $response = curl_exec($ch);
        // $error = curl_error($ch);

        // curl_close($ch);

        // $response = json_decode($response);

        // dd($response)->data;

        // return $response ?: $error;

        $url = "https://api.exchangerate.host/latest?base=USD";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);
        $error = curl_error($curl);
        curl_close($curl);

        $response = json_decode($response);
        return $response ?: $error;
    }
}
