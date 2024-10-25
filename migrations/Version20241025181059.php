<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241025181059 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create table containing beers data';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE beer (id INT NOT NULL, brewery_id INT NOT NULL, name VARCHAR(100) NOT NULL, style VARCHAR(100) NOT NULL, abv NUMERIC(3, 1), PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_58F666ADD15C960 ON beer (brewery_id)');
        $this->addSql('ALTER TABLE beer ADD CONSTRAINT FK_58F666ADD15C960 FOREIGN KEY (brewery_id) REFERENCES brewery (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE beer DROP CONSTRAINT FK_58F666ADD15C960');
        $this->addSql('DROP TABLE beer');
    }
}
