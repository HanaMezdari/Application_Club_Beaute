<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211113103235 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mahassen DROP FOREIGN KEY FK_DE45F45EAEF5A6C1');
        $this->addSql('DROP INDEX IDX_DE45F45EAEF5A6C1 ON mahassen');
        $this->addSql('ALTER TABLE mahassen DROP services_id');
        $this->addSql('ALTER TABLE servicemahassen ADD services_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE servicemahassen ADD CONSTRAINT FK_658947BFAEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id)');
        $this->addSql('CREATE INDEX IDX_658947BFAEF5A6C1 ON servicemahassen (services_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mahassen ADD services_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mahassen ADD CONSTRAINT FK_DE45F45EAEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id)');
        $this->addSql('CREATE INDEX IDX_DE45F45EAEF5A6C1 ON mahassen (services_id)');
        $this->addSql('ALTER TABLE servicemahassen DROP FOREIGN KEY FK_658947BFAEF5A6C1');
        $this->addSql('DROP INDEX IDX_658947BFAEF5A6C1 ON servicemahassen');
        $this->addSql('ALTER TABLE servicemahassen DROP services_id');
    }
}
