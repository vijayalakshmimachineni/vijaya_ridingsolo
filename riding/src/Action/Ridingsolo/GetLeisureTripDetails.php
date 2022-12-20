<?php

namespace App\Action\Ridingsolo;

use App\Domain\Ridingsolo\Ridingsolo;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class GetLeisureTripDetails
{
  private $ridingsolo;
  public function __construct(Ridingsolo $ridingsolo)
  {
    $this->ridingsolo = $ridingsolo;
  }
  public function __invoke(
      ServerRequestInterface $request, 
      ResponseInterface $response, $args
  ): ResponseInterface 
  {
    $ridingsolo = $this->ridingsolo->getLeisureTripDetails($args);
    $response->getBody()->write((string)json_encode($ridingsolo));
    return $response
          ->withHeader('Content-Type', 'application/json');
  }
}