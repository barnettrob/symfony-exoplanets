<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExoPlanetController extends Controller {

  /**
   * @Route("/exoplanets")
   */
  public function getExoplanetsAction() {
    $exoplanetDataService = $this->get('app.exoplanets');
    $exoplanetData = $exoplanetDataService->parse();

    return $this->render('exoplanets/show.html.twig', [
      'exoplanets' => $exoplanetData,
    ]);
  }
}