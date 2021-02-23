<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210223064426 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bar (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, foo_id INTEGER NOT NULL, image VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL)');
        $this->addSql('CREATE INDEX IDX_76FF8CAA8E48560F ON bar (foo_id)');
        $this->addSql('CREATE TABLE foo (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bar');
        $this->addSql('DROP TABLE foo');
    }
}
