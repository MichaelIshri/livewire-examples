<?php

namespace App\Http\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;
use GuzzleHttp\Exception\GuzzleException;

class Weather extends Component
{
    public $city;
    public $response;

    public function render()
    {
        return view('livewire.weather');
    }

    public function search()
    {
        $uri = 'https://openweathermap.org/data/2.5/find?q=' . $this->city . '&type=like&sort=population&cnt=30&appid=b6907d289e10d714a6e88b30761fae22&_=1564312228963';

        $http = new Client();
        $this->response = json_decode(($http->get($uri))->getBody());

        foreach ($this->response->list as $city) {
            $city->celsius = $this->kelvinToCelsius($city->main->temp);
            $city->country = \Locale::getDisplayRegion('-' . $city->sys->country);
        }
    }

    function kelvinToCelsius($temperature)
    {
        if (!is_numeric($temperature)) {
            return false;
        }
        return round(($temperature - 273.15), 1);
    }
}
