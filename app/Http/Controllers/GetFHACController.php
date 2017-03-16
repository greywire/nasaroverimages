<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use stdClass;

use App\Http\Requests;

class GetFHACController extends Controller
{
    public function getimages(Request $request, $page) {
        $client = new Client();

        //** NASA api has a page parameter but it doesnt seem to work? */
        $data = json_decode($client->request("GET", "https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?page=$page&sol=1000&api_key=HN6BNX7TD1nlDw7eH7cndZpRCOfGjbFrxAfWlPI1")->getBody());

        //** so we're going to page it ourselves... */
        $returndata = new stdClass();

        foreach(array_slice($data->photos, ($page-1)*25, 25) as $photo) {
            $returndata->photos[] = $photo;
        }

        return response(json_encode($returndata))->header('Content-Type', 'application/json');
    }
}
