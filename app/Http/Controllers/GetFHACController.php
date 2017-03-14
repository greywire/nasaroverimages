<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

use App\Http\Requests;

class GetFHACController extends Controller
{
    public function getimages(Request $request) {
        $client = new Client();

        $data = $client->request("GET", "https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?page=1&sol=1000&api_key=HN6BNX7TD1nlDw7eH7cndZpRCOfGjbFrxAfWlPI1");

        return response($data->getBody())->header('Content-Type', 'application/json');
    }
}
