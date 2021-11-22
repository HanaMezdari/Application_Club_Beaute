<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211120203147 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, centresdebeaute_id INT DEFAULT NULL, servicelilia_id INT DEFAULT NULL, nbr_personne INT NOT NULL, nom_user VARCHAR(255) NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_42C84955E12E43F3 (centresdebeaute_id), INDEX IDX_42C84955B60A8613 (servicelilia_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955E12E43F3 FOREIGN KEY (centresdebeaute_id) REFERENCES centresdebeaute (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955B60A8613 FOREIGN KEY (servicelilia_id) REFERENCES servicelilia (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reservation');
    }
}
