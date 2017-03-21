<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use stdClass;

use App\Http\Requests;

class GetFHACController extends Controller
{
    public function getimages(Request $request, $sol, $cam, $page) {
        $client = new Client();
        $returndata = new stdClass();
        $returndata->photos = Array();

        //** NASA api has a page parameter but it doesnt seem to work? */
        $data = json_decode($client->request("GET", "https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?page=$page&sol=$sol&api_key=HN6BNX7TD1nlDw7eH7cndZpRCOfGjbFrxAfWlPI1&camera=$cam",['http_errors' => false])->getBody());

        //** so we're going to page it ourselves... */

        if(isset($data->photos)) {
            foreach (array_slice($data->photos, ($page - 1) * 25, 25) as $photo) {
                $returndata->photos[] = $photo;
            }
        }

        return response(json_encode($returndata))->header('Content-Type', 'application/json');
    }
}
