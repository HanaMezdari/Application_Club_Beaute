<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211202203404 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationlilia ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservationlilia ADD CONSTRAINT FK_5895DBCFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_5895DBCFA76ED395 ON reservationlilia (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationlilia DROP FOREIGN KEY FK_5895DBCFA76ED395');
        $this->addSql('DROP INDEX IDX_5895DBCFA76ED395 ON reservationlilia');
        $this->addSql('ALTER TABLE reservationlilia DROP user_id');
    }
}
