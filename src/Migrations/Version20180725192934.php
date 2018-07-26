<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180725192934 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE movies (id INT AUTO_INCREMENT NOT NULL, director_name LONGTEXT NOT NULL, duration INT NOT NULL, actor_2_name LONGTEXT NOT NULL, gross INT NOT NULL, genres LONGTEXT NOT NULL, actor_1_name LONGTEXT NOT NULL, movie_title LONGTEXT NOT NULL, num_voted_users INT NOT NULL, actor_3_name LONGTEXT NOT NULL, plot_keywords LONGTEXT NOT NULL, movie_imdb_link LONGTEXT NOT NULL, language LONGTEXT NOT NULL, country LONGTEXT NOT NULL, content_rating LONGTEXT NOT NULL, budget INT NOT NULL, title_year INT NOT NULL, imdb_score DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE movies');
    }
}
