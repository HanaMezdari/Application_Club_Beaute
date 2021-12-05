<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211202172115 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservationlilia (id INT AUTO_INCREMENT NOT NULL, servicelilia_id INT DEFAULT NULL, nom_user VARCHAR(255) NOT NULL, end_date DATETIME NOT NULL, start_date DATETIME NOT NULL, nbr_personne INT NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_5895DBCFB60A8613 (servicelilia_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservationlilia ADD CONSTRAINT FK_5895DBCFB60A8613 FOREIGN KEY (servicelilia_id) REFERENCES servicelilia (id)');
        $this->addSql('DROP TABLE reservation');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, centresdebeaute_id INT DEFAULT NULL, servicelilia_id INT DEFAULT NULL, liliabenaziza_id INT DEFAULT NULL, serviceviolette_id INT DEFAULT NULL, servicemahassen_id INT DEFAULT NULL, servicefleurdelys_id INT DEFAULT NULL, nbr_personne INT NOT NULL, nom_user VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_42C8495571F14522 (serviceviolette_id), INDEX IDX_42C84955E12E43F3 (centresdebeaute_id), INDEX IDX_42C84955831F9E3E (servicemahassen_id), INDEX IDX_42C84955B60A8613 (servicelilia_id), INDEX IDX_42C849552A79FD (servicefleurdelys_id), INDEX IDX_42C84955A3A01640 (liliabenaziza_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849552A79FD FOREIGN KEY (servicefleurdelys_id) REFERENCES servicefleurdelys (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495571F14522 FOREIGN KEY (serviceviolette_id) REFERENCES serviceviolette (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955831F9E3E FOREIGN KEY (servicemahassen_id) REFERENCES servicemahassen (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A3A01640 FOREIGN KEY (liliabenaziza_id) REFERENCES liliabenaziza (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955B60A8613 FOREIGN KEY (servicelilia_id) REFERENCES servicelilia (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955E12E43F3 FOREIGN KEY (centresdebeaute_id) REFERENCES centresdebeaute (id)');
        $this->addSql('DROP TABLE reservationlilia');
    }
}
