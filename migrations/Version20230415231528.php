<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230415231528 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentarys DROP FOREIGN KEY FK_60A348B7A674A03E');
        $this->addSql('ALTER TABLE commentarys DROP FOREIGN KEY FK_60A348B7A76ED395');
        $this->addSql('DROP INDEX IDX_60A348B7A76ED395 ON commentarys');
        $this->addSql('DROP INDEX IDX_60A348B73B153154 ON commentarys');
        $this->addSql('ALTER TABLE commentarys ADD user INT NOT NULL, ADD tricks INT NOT NULL, DROP user_id, DROP tricks_id');
        $this->addSql('ALTER TABLE tricks DROP FOREIGN KEY FK_E1D902C1A76ED395');
        $this->addSql('DROP INDEX IDX_E1D902C1A76ED395 ON tricks');
        $this->addSql('ALTER TABLE tricks ADD user INT NOT NULL, DROP user_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentarys ADD user_id INT DEFAULT NULL, ADD tricks_id INT DEFAULT NULL, DROP user, DROP tricks');
        $this->addSql('ALTER TABLE commentarys ADD CONSTRAINT FK_60A348B7A674A03E FOREIGN KEY (tricks_id) REFERENCES tricks (id)');
        $this->addSql('ALTER TABLE commentarys ADD CONSTRAINT FK_60A348B7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_60A348B7A76ED395 ON commentarys (user_id)');
        $this->addSql('CREATE INDEX IDX_60A348B73B153154 ON commentarys (tricks_id)');
        $this->addSql('ALTER TABLE tricks ADD user_id INT DEFAULT NULL, DROP user');
        $this->addSql('ALTER TABLE tricks ADD CONSTRAINT FK_E1D902C1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_E1D902C1A76ED395 ON tricks (user_id)');
    }
}
