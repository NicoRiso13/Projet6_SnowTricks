<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230421194742 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medias DROP FOREIGN KEY FK_12D2AF81A674A03E');
        $this->addSql('DROP INDEX IDX_12D2AF81A674A03E ON medias');
        $this->addSql('ALTER TABLE medias CHANGE tricks_id_id tricks_id INT NOT NULL');
        $this->addSql('ALTER TABLE medias ADD CONSTRAINT FK_12D2AF813B153154 FOREIGN KEY (tricks_id) REFERENCES tricks (id)');
        $this->addSql('CREATE INDEX IDX_12D2AF813B153154 ON medias (tricks_id)');
        $this->addSql('ALTER TABLE tricks DROP FOREIGN KEY FK_E1D902C19D86650F');
        $this->addSql('DROP INDEX IDX_E1D902C19D86650F ON tricks');
        $this->addSql('ALTER TABLE tricks CHANGE user_id_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE tricks ADD CONSTRAINT FK_E1D902C1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_E1D902C1A76ED395 ON tricks (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medias DROP FOREIGN KEY FK_12D2AF813B153154');
        $this->addSql('DROP INDEX IDX_12D2AF813B153154 ON medias');
        $this->addSql('ALTER TABLE medias CHANGE tricks_id tricks_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE medias ADD CONSTRAINT FK_12D2AF81A674A03E FOREIGN KEY (tricks_id_id) REFERENCES tricks (id)');
        $this->addSql('CREATE INDEX IDX_12D2AF81A674A03E ON medias (tricks_id_id)');
        $this->addSql('ALTER TABLE tricks DROP FOREIGN KEY FK_E1D902C1A76ED395');
        $this->addSql('DROP INDEX IDX_E1D902C1A76ED395 ON tricks');
        $this->addSql('ALTER TABLE tricks CHANGE user_id user_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE tricks ADD CONSTRAINT FK_E1D902C19D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_E1D902C19D86650F ON tricks (user_id_id)');
    }
}
