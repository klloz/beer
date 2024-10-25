<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241025193725 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create table containing reviews data';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE review_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE review (id INT NOT NULL, beer_id INT NOT NULL, overall NUMERIC(2, 1) NOT NULL, aroma NUMERIC(2, 1) NOT NULL, appearance NUMERIC(2, 1) NOT NULL, taste NUMERIC(2, 1) NOT NULL, palate NUMERIC(2, 1) NOT NULL, reviewer VARCHAR(100), created_at DATE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_794381C6D0989053 ON review (beer_id)');
        $this->addSql('COMMENT ON COLUMN review.created_at IS \'(DC2Type:date_immutable)\'');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6D0989053 FOREIGN KEY (beer_id) REFERENCES beer (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE review_id_seq CASCADE');
        $this->addSql('ALTER TABLE review DROP CONSTRAINT FK_794381C6D0989053');
        $this->addSql('DROP TABLE review');
    }
}
