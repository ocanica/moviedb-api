<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Movies;
use App\Repository\MoviesRepository;
use Doctrine\ORM\EntityManagerInterface;

class MoviesController extends ApiController
{
    /**
     * @Route(
     *      "/movies", 
     *      name="movies", 
     *      methods={"GET"}
     * )
     */
    public function index(MoviesRepository $moviesRespository)
    {
        $movies = $moviesRespository->transformAll();
        return $this->respond($movies);
    }

    /**
     * @Route("/movies/{id}", 
     *      name="movies_id", 
     *      methods={"GET"}
     * )
     */
    public function show($id, MoviesRepository $moviesRespository)
    {
        $movies = $moviesRespository->find($id);

        if (! $movies) {
            return $this->respondNotFound();
        }

        $movies = $moviesRespository->transform($movies);

        return $this->respond($movies);
    }
}
