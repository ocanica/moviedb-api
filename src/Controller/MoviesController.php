<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends ApiController
{
    /**
     * @Route("/movies", name="movies")
     */
    public function index()
    {
        return $this->respond([
            'movie' => 'The Lion King',
            'release_date' => '1994',
        ]);
    }
}
