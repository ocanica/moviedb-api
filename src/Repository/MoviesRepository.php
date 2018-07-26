<?php

namespace App\Repository;

use App\Entity\Movies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Movies|null find($id, $lockMode = null, $lockVersion = null)
 * @method Movies|null findOneBy(array $criteria, array $orderBy = null)
 * @method Movies[]    findAll()
 * @method Movies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MoviesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Movies::class);
    }
    
    public function transform(Movies $movie)
    {
        return [
            'id' => (int) $movie->getId(),
            'movie_title' => (string) $movie->getMovieTitle(),
            'title_year' => (int) $movie->getTitleYear(),
            'duration' => (int) $movie->getDuration(),
            'genres' => (string) $movie->getGenres(),
            'plot_keywords' => (string) $movie->getPlotKeywords(),
            'content_rating' => (string) $movie->getContentRating(),
            'language' => (string) $movie->getLanguage(),
            'country' => (string) $movie->getCountry(),
            'budget' => (int) $movie->getBudget(),
            'gross' => (int) $movie->getGross(),
            'director' => (string) $movie->getDirectorName(),
            'actor_1' => (string) $movie->getActor1Name(),
            'actor_2' => (string) $movie->getActor2Name(),
            'actor_3' => (string) $movie->getActor3Name(),
            'imdb_link' => (string) $movie->getMovieImdbLink(),
            'num_of_imdb_votes' => (int) $movie->getNumVotedUsers(),
            'imdb_score' => (float) $movie->getImdbScore()
        ];
    }

    public function transformAll()
    {
        $movies = $this->findAll();
        $moviesArray = [];

        foreach ($movies as $movie) {
            $moviesArray[] = $this->transform($movie);
        }

        return $moviesArray;
    }
//    /**
//     * @return Movies[] Returns an array of Movies objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Movies
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
