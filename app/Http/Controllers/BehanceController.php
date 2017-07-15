<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Behance\Client as BClient;

class BehanceController extends Controller
{
    public $client;

    public function __construct()
    {
        $this->client = new BClient("ZuD0E8HwxGjzTnPR6vOxRqEo5TqmRXyx");
    }

    public function getProjects() {
        $projects = [];
        $up = $this->client->getUserProjects("alexcrocker");
        $numProjects = count($up);
        for ( $i = 0 ; $i < $numProjects ; $i++ ) {
            $p = $this->client->getProject($up[$i]->id);
            array_push($projects, $p);
        }

        return json_encode($projects);
    }
}
