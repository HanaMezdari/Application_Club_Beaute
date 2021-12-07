<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211207115936 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservationviolette (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, serviceviolette_id INT DEFAULT NULL, nbr_personne INT NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_8E05DDEBA76ED395 (user_id), INDEX IDX_8E05DDEB71F14522 (serviceviolette_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservationviolette ADD CONSTRAINT FK_8E05DDEBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservationviolette ADD CONSTRAINT FK_8E05DDEB71F14522 FOREIGN KEY (serviceviolette_id) REFERENCES serviceviolette (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reservationviolette');
    }
}
