<?php

namespace App\Action\BikeTrips;

use App\Domain\BikeTrips\BikeTrips;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class UpdateTripFaqStatus
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
     // $data = $request->getParsedBody();
    $data =(array) json_decode($data); 
    //$data = array_merge($_POST, $_FILES);
    $bikeTrips = $this->bikeTrips->updateTripFaqStatus($data);
    $response->getBody()->write((string)json_encode($bikeTrips));
    return $response
          ->withHeader('Content-Type', 'application/json');
  }
}