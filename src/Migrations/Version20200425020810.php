<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200425020810 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('INSERT INTO post (id, content, created_at) VALUES (1, "post1", "2020-01-01")');
        $this->addSql('INSERT INTO post (id, content, created_at) VALUES (2, "post2", "2020-01-01")');
        $this->addSql('INSERT INTO post (id, content, created_at) VALUES (3, "post3", "2020-01-01")');

        $this->addSql('INSERT INTO comment (id, content, post_id, created_at) VALUES (1, "older comment for post1", 1, "2020-01-01")');
        $this->addSql('INSERT INTO comment (id, content, post_id, created_at) VALUES (2, "newer comment for post1", 1, "2020-01-02")');
        $this->addSql('INSERT INTO comment (id, content, post_id, created_at) VALUES (3, "older comment for post2", 2, "2020-01-03")');
        $this->addSql('INSERT INTO comment (id, content, post_id, created_at) VALUES (4, "newer comment for post2", 2, "2020-01-04")');
        $this->addSql('INSERT INTO comment (id, content, post_id, created_at) VALUES (5, "older comment for post3", 3, "2020-01-05")');
        $this->addSql('INSERT INTO comment (id, content, post_id, created_at) VALUES (6, "newer comment for post3", 3, "2020-01-06")');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

        $this->addSql('DELETE FROM comment');
        $this->addSql('DELETE FROM post');
    }
}
