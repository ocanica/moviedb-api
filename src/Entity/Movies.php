<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MoviesRepository")
 */
class Movies
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $director_name;

    /**
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @ORM\Column(type="text")
     */
    private $actor_2_name;

    /**
     * @ORM\Column(type="integer")
     */
    private $gross;

    /**
     * @ORM\Column(type="text")
     */
    private $genres;

    /**
     * @ORM\Column(type="text")
     */
    private $actor_1_name;

    /**
     * @ORM\Column(type="text")
     */
    private $movie_title;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_voted_users;

    /**
     * @ORM\Column(type="text")
     */
    private $actor_3_name;

    /**
     * @ORM\Column(type="text")
     */
    private $plot_keywords;

    /**
     * @ORM\Column(type="text")
     */
    private $movie_imdb_link;

    /**
     * @ORM\Column(type="text")
     */
    private $language;

    /**
     * @ORM\Column(type="text")
     */
    private $country;

    /**
     * @ORM\Column(type="text")
     */
    private $content_rating;

    /**
     * @ORM\Column(type="integer")
     */
    private $budget;

    /**
     * @ORM\Column(type="integer")
     */
    private $title_year;

    /**
     * @ORM\Column(type="float")
     */
    private $imdb_score;

    public function getId()
    {
        return $this->id;
    }

    public function getDirectorName(): ?string
    {
        return $this->director_name;
    }

    public function setDirectorName(string $director_name): self
    {
        $this->director_name = $director_name;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getActor2Name(): ?string
    {
        return $this->actor_2_name;
    }

    public function setActor2Name(string $actor_2_name): self
    {
        $this->actor_2_name = $actor_2_name;

        return $this;
    }

    public function getGross(): ?int
    {
        return $this->gross;
    }

    public function setGross(int $gross): self
    {
        $this->gross = $gross;

        return $this;
    }

    public function getGenres(): ?string
    {
        return $this->genres;
    }

    public function setGenres(string $genres): self
    {
        $this->genres = $genres;

        return $this;
    }

    public function getActor1Name(): ?string
    {
        return $this->actor_1_name;
    }

    public function setActor1Name(string $actor_1_name): self
    {
        $this->actor_1_name = $actor_1_name;

        return $this;
    }

    public function getMovieTitle(): ?string
    {
        return $this->movie_title;
    }

    public function setMovieTitle(string $movie_title): self
    {
        $this->movie_title = $movie_title;

        return $this;
    }

    public function getNumVotedUsers(): ?int
    {
        return $this->num_voted_users;
    }

    public function setNumVotedUsers(int $num_voted_users): self
    {
        $this->num_voted_users = $num_voted_users;

        return $this;
    }

    public function getActor3Name(): ?string
    {
        return $this->actor_3_name;
    }

    public function setActor3Name(string $actor_3_name): self
    {
        $this->actor_3_name = $actor_3_name;

        return $this;
    }

    public function getPlotKeywords(): ?string
    {
        return $this->plot_keywords;
    }

    public function setPlotKeywords(string $plot_keywords): self
    {
        $this->plot_keywords = $plot_keywords;

        return $this;
    }

    public function getMovieImdbLink(): ?string
    {
        return $this->movie_imdb_link;
    }

    public function setMovieImdbLink(string $movie_imdb_link): self
    {
        $this->movie_imdb_link = $movie_imdb_link;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getContentRating(): ?string
    {
        return $this->content_rating;
    }

    public function setContentRating(string $content_rating): self
    {
        $this->content_rating = $content_rating;

        return $this;
    }

    public function getBudget(): ?int
    {
        return $this->budget;
    }

    public function setBudget(int $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getTitleYear(): ?int
    {
        return $this->title_year;
    }

    public function setTitleYear(int $title_year): self
    {
        $this->title_year = $title_year;

        return $this;
    }

    public function getImdbScore(): ?float
    {
        return $this->imdb_score;
    }

    public function setImdbScore(float $imdb_score): self
    {
        $this->imdb_score = $imdb_score;

        return $this;
    }
}
