<?php

class CurrencyConverter
{
    public function converter()
    {
        $url = "https://freecurrencyapi.net/api/v2/latest?apikey=4743ccb0-5c16-11ec-87ca-e5343f1c2775&base_currency=USD";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($response)->data;

        dd($response->IDR);
    }
}
