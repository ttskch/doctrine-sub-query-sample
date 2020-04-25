<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200425023853 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('UPDATE comment SET published = 1 WHERE id = 1');
        $this->addSql('UPDATE comment SET published = 1 WHERE id = 2');
        $this->addSql('UPDATE comment SET published = 1 WHERE id = 3');
        $this->addSql('UPDATE comment SET published = 0 WHERE id = 4');
        $this->addSql('UPDATE comment SET published = 0 WHERE id = 5');
        $this->addSql('UPDATE comment SET published = 0 WHERE id = 6');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

        $this->addSql('UPDATE comment SET published = NULL WHERE id IN (1,2,3,4,5,6)');
    }
}
