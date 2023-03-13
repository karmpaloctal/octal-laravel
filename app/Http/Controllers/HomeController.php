<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/**
 * Class HomeController .
 */
class HomeController extends Controller
{
    /**
     * @param $locale
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    
    public function test_curl(Request $request){

        $data = array();

        $data = [
            'id' => '123',
            'last_name' => 'User Dev',
            'email' => 'userdev@gmail.com'
        ];
        $end_url = 'test1';
        $response = $this->curl($data,$end_url); 

        dd($response);

        
    }

}
