<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Tumblr\API\Client as TClient;

class TumblrController extends Controller
{
    public $client;

    public function __construct()
    {
        $this->client = new TClient("2Jqw0B1EzMPysOOAtgJ5aIWVDfbkqPwFItsOXZtdXwGExOmrnA", "mIuRhCyrwZRpXwFPLKlvVeVGqCLBYlgtkz8ys7K83SkTjIOwZs");
        $this->client->setToken("2Jqw0B1EzMPysOOAtgJ5aIWVDfbkqPwFItsOXZtdXwGExOmrnA", "mIuRhCyrwZRpXwFPLKlvVeVGqCLBYlgtkz8ys7K83SkTjIOwZs");
    }

    public function getPosts() {
        $posts = $this->client->getBlogPosts("alexcrocker");
        return json_encode($posts);
    }
}
