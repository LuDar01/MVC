<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class JsonQuote
{
    #[Route("/api/quote")]
    public function jsonQuote(): Response
    {
        $quote = [
            'New day, new challenges.',
            'Love yourself.',
            'Be yourself, everybody else is taken!'

        ];
        $rand = array_rand($quote);
        $randquotes = $quote[$rand];

        $data = [
            'lucky-quote' => $randquotes,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}