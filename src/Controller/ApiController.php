<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApiController extends Controller
{
    protected $statusCode = 200;

    public function setStatusCode(int $statusCode)
    {
        $this->statusCode = $statusCode;

        return $this->statusCode;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function respond($data, $header = [])
    {
        return $this->json($data, $this->getStatusCode(), $header);
    }

    // Set error message and return JSON response
    public function respondWithError($response, $errors, $header = [])
    {
        $data = [
            'Resoponse' => $response,
            'Error' => $errors
        ];

        return $this->json($data, $this->getStatusCode(), $header);
    }

    // Return unauthorised http response
    public function respondUnauthorised($response = false, $errorMessage = 'Not authorised')
    {
        return $this->setStatusCode(401)->respondWithError($response, $message);
    }
}