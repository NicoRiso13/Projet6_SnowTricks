<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230524170410 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C3B153154');
        $this->addSql('DROP INDEX IDX_6A2CA10C3B153154 ON media');
        $this->addSql('ALTER TABLE media CHANGE pictures pictures VARCHAR(255) DEFAULT NULL, CHANGE videos videos VARCHAR(255) DEFAULT NULL, CHANGE tricks_id trick_id INT NOT NULL');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CB281BE2E FOREIGN KEY (trick_id) REFERENCES trick (id)');
        $this->addSql('CREATE INDEX IDX_6A2CA10CB281BE2E ON media (trick_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CB281BE2E');
        $this->addSql('DROP INDEX IDX_6A2CA10CB281BE2E ON media');
        $this->addSql('ALTER TABLE media CHANGE pictures pictures VARCHAR(255) NOT NULL, CHANGE videos videos VARCHAR(255) NOT NULL, CHANGE trick_id tricks_id INT NOT NULL');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C3B153154 FOREIGN KEY (tricks_id) REFERENCES trick (id)');
        $this->addSql('CREATE INDEX IDX_6A2CA10C3B153154 ON media (tricks_id)');
    }
}
