<?php

namespace App\Http\Controllers;

class SearchController extends Controller
{
    //
    public function callAction($method, $parameters)
    {
        $api_key = 'YOUR_API_KEY';
        $cx = 'YOUR_CX';
        $address = urlencode('30 George,Box Hill NSW 2765');
        $url = 'https://www.googleapis.com/customsearch/v1?key='.$api_key.'&cx='.$cx.'&q='.$address;
        // $url = 'https://www.googleapis.com/customsearch/v1?key='.$api_key.'&cx='.$cx.'&searchType=image&q='.$address;

        $body = file_get_contents($url);
        $json = json_decode($body);
        //this code will print the json data of search result
        if ($json->items){
            foreach ($json->items as $item){
                //get link from here $item->link
                var_dump($item);
            }
        }

        //use $item->link to get the  link
       $url = 'your link here';
      //  $url = 'https://www.realestate.com.au/property/30-george-st-box-hill-nsw-2765/';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
        //curl_setopt($ch, CURLOPT_ENCODING, '');
        $body2 = curl_exec($ch);

        if ($body2 === false) {
            echo 'Curl error: ' . curl_error($ch);
        }

        curl_close($ch);

        // Use regular expressions to extract the JSON data within the <script> tag
        $pattern = '/var digitalData = (.*?);/s';

        preg_match($pattern, $body2, $matches);

        // Check if there is a match
        if (isset($matches[1])) {
            // Decode the JSON data to a PHP array
            $jsonData = json_decode($matches[1], true);

            // Check if decoding was successful
            if (json_last_error() === JSON_ERROR_NONE) {
                // Now $jsonData contains the PHP array equivalent of the JSON data
                dd($jsonData['page']['pageInfo']);
            } else {
                echo 'Error decoding JSON: ' . json_last_error_msg();
            }
        } else {
            echo 'No match found for JSON data.';
        }
    }
}
