<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Tumblr\API\Client as TClient;

class TumblrController extends Controller
{
    public $client;

    public function __construct()
    {
        $this->client = new TClient(env('TUMBLR_CONSUMER_KEY'), env('TUMBLR_CONSUMER_SECRET'));
        $this->client->setToken(env('TUMBLR_CONSUMER_KEY'), env('TUMBLR_CONSUMER_SECRET'));
    }

    public function getPosts() {
        $posts = $this->client->getBlogPosts("alexcrocker");
        return json_encode($posts);
    }
}
