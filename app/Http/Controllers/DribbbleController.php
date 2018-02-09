<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Pool;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as Guzzle;


class DribbbleController extends Controller
{
    public $client;
    public $url = "https://api.dribbble.com/v2";
    public $headers = [];

    public function __construct()
    {
        $token = env('DRIBBBLE_ACCESS_TOKEN');
        $this->headers['Authorization'] = "Bearer $token";
        
        $this->client = new Client();
    }

    public function getShots()
    {
        // Forms the request
        $req = new Guzzle("GET", "$this->url/user/shots", $this->headers, "");

        // Sends the request
        $resp = $this->client->send($req);

        // Returns the text from the response
        return $resp->getBody()->getContents();
    }

    public function getShotDetails($id)
    {
        // Forms the request
        $req = new Guzzle('GET', "$this->url/shots/$id", $this->headers, "");

        // Sends the request
        $resp = $this->client->send($req);

        // Returns the text from the response
        return $resp->getBody()->getContents();
    }
}
