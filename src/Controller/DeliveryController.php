<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DateTime;

class DeliveryController
{
    public function indexAction(Request $request/*, LoggerInterface $logger*/): Response
    {
        $date = new DateTime();
        $dateStr =  $date->format('d/m/y H:i');

        return new Response("Allforweb is OK. $dateStr");
    }
}