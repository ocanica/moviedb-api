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

    // Returns 201 Created
    public function respondCreated($data = [])
    {
        return $this->setStatusCode(201)->respond($data);
    }

    // Set error message and return JSON response
    public function respondWithError($errors, $header = [])
    {
        $data = [
            'Error' => $errors
        ];

        return $this->json($data, $this->getStatusCode(), $header);
    }

    // Return 401 Unauthorised HTTP Response
    public function respondUnauthorised($errorMessage = 'Not authorised')
    {
        return $this->setStatusCode(401)->respondWithError($message);
    }

    //Return 422 Unprocessable Entitiy
    public function respondValidationError($message = 'Validation error')
    {
        return $this->setStatusCode(422)->respondWithError($message);
    }

    //Return 404 Not Found
    public function respondNotFound($message = 'Not found')
    {
        return $this->setStatusCode(404)->respondWithError($message);
    }
}