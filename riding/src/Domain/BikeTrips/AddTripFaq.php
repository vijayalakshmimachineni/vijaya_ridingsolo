<?php

namespace App\Action\BikeTrips;

use App\Domain\BikeTrips\BikeTrips;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class AddTripFaq
{ 
  private $bikeTrips;
  public function __construct(BikeTrips $bikeTrips)
  {
    $this->bikeTrips = $bikeTrips;
  }
  public function __invoke(
      ServerRequestInterface $request, 
      ResponseInterface $response
  ): ResponseInterface 
  {
    $data = $request->getBody();
    $data =(array) json_decode($data);
    $bikeTrips = $this->bikeTrips->addTripFaq($data);
    var_dump($bikeTrips);die();
    $response->getBody()->write((string)json_encode($bikeTrips));
    return $response
          ->withHeader('Content-Type', 'application/json');
  }
}