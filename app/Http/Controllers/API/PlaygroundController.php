<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Playground\Playground as Playground;


class PlaygroundController extends Controller
{
    public function getAllPlaygrounds() {
        $response = new \StdClass;
        $response->type = "FeatureCollection";
        $response->features = [];
        $allPlaygrounds = Playground::all();

        foreach($allPlaygrounds as $p) {
            $t = new \StdClass;
            $t->type = "Feature";
            $t->id = $p->playgroundid;
            // set up geometry object
            $geometry = new \StdClass;
            $geometry->type = "Point";
            $geometry->coordinates = [$p->addressLongitude, $p->addressLatitude];
            $t->geometry = $geometry;

            // sets up properties
            $properties = new \StdClass;
            $properties->title = $p->name;
            $properties->icon = 'marker-1.png';
            $properties->id = $p->playgroundid;
            // sets up optinons to merge in to properties
            $options = new \StdClass;
            $options->wasserspielplatz = $p->wasserspielplatz;
            $options->fussball = $p->fussball;
            $options->basketball = $p->basketball;
            $options->tischtennis = $p->tischtennis;
            $options->rutsche = $p->rutsche;
            $options->klettern = $p->klettern;
            $options->spielsand = $p->spielsand;
            $options->seilbahn = $p->seilbahn;
            $properties->options = $options;

            //merge properties into temp object
            $t->properties = $properties;
            
            array_push($response->features, $t);
        }
        return response(json_encode($response));
    }
}
