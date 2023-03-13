<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    /**
     * Write code on Method
     *
     * @return response()
     */
    public function curl($data, $end_url)
    {

        $apiURL = 'https://google.com/api/'.$end_url;
        $postInput = $data;
        $headers = [
            //'X-header' => 'value'
            'Content-Type: application/json',
        ];
  
        $response = Http::withHeaders($headers)->post($apiURL, $postInput);
  
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
        
        //dd($responseBody);
        return $responseBody;

        
    }



}
