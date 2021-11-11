<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211108085813 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sousservice_services (sousservice_id INT NOT NULL, services_id INT NOT NULL, INDEX IDX_3BEE10D4BBC9E3B4 (sousservice_id), INDEX IDX_3BEE10D4AEF5A6C1 (services_id), PRIMARY KEY(sousservice_id, services_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sousservice_services ADD CONSTRAINT FK_3BEE10D4BBC9E3B4 FOREIGN KEY (sousservice_id) REFERENCES sousservice (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sousservice_services ADD CONSTRAINT FK_3BEE10D4AEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE sousservice_services');
    }
}
