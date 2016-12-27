<?php

namespace AppBundle\Service;

use GuzzleHttp\Client;

class ExoPlanetService {
  public function parse() {
    $exoplanetJsonUri = 'http://www.asterank.com/api/kepler?query={%22TPLANET%22:{%22$lt%22:320,%22$gt%22:290}}&limit=10';

    $exoplanetsClient = new Client([
      'base_uri' => $exoplanetJsonUri,
    ]);

    $exoplanetsResponse = $exoplanetsClient->request('GET')->getBody();

    return json_decode($exoplanetsResponse);
  }
}