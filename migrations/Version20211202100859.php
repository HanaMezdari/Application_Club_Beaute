<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211202100859 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE services_servicelilia (services_id INT NOT NULL, servicelilia_id INT NOT NULL, INDEX IDX_ED9A9395AEF5A6C1 (services_id), INDEX IDX_ED9A9395B60A8613 (servicelilia_id), PRIMARY KEY(services_id, servicelilia_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE services_servicelilia ADD CONSTRAINT FK_ED9A9395AEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE services_servicelilia ADD CONSTRAINT FK_ED9A9395B60A8613 FOREIGN KEY (servicelilia_id) REFERENCES servicelilia (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE serviceviolette ADD image VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE services_servicelilia');
        $this->addSql('ALTER TABLE serviceviolette DROP image');
    }
}
