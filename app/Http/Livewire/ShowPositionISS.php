<?php

namespace App\Http\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class ShowPositionISS extends Component
{
    public $latitude;
    public $longitude;
    public $count = 0;

    public function iss()
    {
        $client = new Client();

        $res = $client->request('GET', 'http://api.open-notify.org/iss-now.json');
        //echo $res->getStatusCode();
        $data = json_decode($res->getBody());
        $this->latitude = $data->iss_position->latitude;
        $this->longitude = $data->iss_position->longitude;
    }

}
