<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 *
 * @ORM\Table(name="movie")
 * @ORM\Entity
 */
class Movie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="movie_title", type="text", length=65535, nullable=true)
     */
    private $movieTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="director_name", type="text", length=65535, nullable=true)
     */
    private $directorName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="actor_1_name", type="text", length=65535, nullable=true)
     */
    private $actor1Name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="actor_2_name", type="text", length=65535, nullable=true)
     */
    private $actor2Name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="actor_3_name", type="text", length=65535, nullable=true)
     */
    private $actor3Name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_rating", type="text", length=65535, nullable=true)
     */
    private $contentRating;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duration", type="text", length=65535, nullable=true)
     */
    private $duration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_year", type="text", length=65535, nullable=true)
     */
    private $titleYear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genres", type="text", length=65535, nullable=true)
     */
    private $genres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plot_keywords", type="text", length=65535, nullable=true)
     */
    private $plotKeywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="language", type="text", length=65535, nullable=true)
     */
    private $language;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="text", length=65535, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="budget", type="text", length=65535, nullable=true)
     */
    private $budget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gross", type="text", length=65535, nullable=true)
     */
    private $gross;

    /**
     * @var float|null
     *
     * @ORM\Column(name="imdb_score", type="float", precision=10, scale=0, nullable=true)
     */
    private $imdbScore;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_voted_users", type="integer", nullable=true)
     */
    private $numVotedUsers;

    /**
     * @var string|null
     *
     * @ORM\Column(name="movie_imdb_link", type="text", length=65535, nullable=true)
     */
    private $movieImdbLink;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMovieTitle(): ?string
    {
        return $this->movieTitle;
    }

    public function setMovieTitle(?string $movieTitle): self
    {
        $this->movieTitle = $movieTitle;

        return $this;
    }

    public function getDirectorName(): ?string
    {
        return $this->directorName;
    }

    public function setDirectorName(?string $directorName): self
    {
        $this->directorName = $directorName;

        return $this;
    }

    public function getActor1Name(): ?string
    {
        return $this->actor1Name;
    }

    public function setActor1Name(?string $actor1Name): self
    {
        $this->actor1Name = $actor1Name;

        return $this;
    }

    public function getActor2Name(): ?string
    {
        return $this->actor2Name;
    }

    public function setActor2Name(?string $actor2Name): self
    {
        $this->actor2Name = $actor2Name;

        return $this;
    }

    public function getActor3Name(): ?string
    {
        return $this->actor3Name;
    }

    public function setActor3Name(?string $actor3Name): self
    {
        $this->actor3Name = $actor3Name;

        return $this;
    }

    public function getContentRating(): ?string
    {
        return $this->contentRating;
    }

    public function setContentRating(?string $contentRating): self
    {
        $this->contentRating = $contentRating;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getTitleYear(): ?string
    {
        return $this->titleYear;
    }

    public function setTitleYear(?string $titleYear): self
    {
        $this->titleYear = $titleYear;

        return $this;
    }

    public function getGenres(): ?string
    {
        return $this->genres;
    }

    public function setGenres(?string $genres): self
    {
        $this->genres = $genres;

        return $this;
    }

    public function getPlotKeywords(): ?string
    {
        return $this->plotKeywords;
    }

    public function setPlotKeywords(?string $plotKeywords): self
    {
        $this->plotKeywords = $plotKeywords;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getBudget(): ?string
    {
        return $this->budget;
    }

    public function setBudget(?string $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getGross(): ?string
    {
        return $this->gross;
    }

    public function setGross(?string $gross): self
    {
        $this->gross = $gross;

        return $this;
    }

    public function getImdbScore(): ?float
    {
        return $this->imdbScore;
    }

    public function setImdbScore(?float $imdbScore): self
    {
        $this->imdbScore = $imdbScore;

        return $this;
    }

    public function getNumVotedUsers(): ?int
    {
        return $this->numVotedUsers;
    }

    public function setNumVotedUsers(?int $numVotedUsers): self
    {
        $this->numVotedUsers = $numVotedUsers;

        return $this;
    }

    public function getMovieImdbLink(): ?string
    {
        return $this->movieImdbLink;
    }

    public function setMovieImdbLink(?string $movieImdbLink): self
    {
        $this->movieImdbLink = $movieImdbLink;

        return $this;
    }


}
