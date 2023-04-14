<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230414220805 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentarys ADD CONSTRAINT FK_60A348B79D86650F FOREIGN KEY (user_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE commentarys ADD CONSTRAINT FK_60A348B7A674A03E FOREIGN KEY (tricks_id_id) REFERENCES tricks (id)');
        $this->addSql('CREATE INDEX IDX_60A348B79D86650F ON commentarys (user_id_id)');
        $this->addSql('CREATE INDEX IDX_60A348B7A674A03E ON commentarys (tricks_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentarys DROP FOREIGN KEY FK_60A348B79D86650F');
        $this->addSql('ALTER TABLE commentarys DROP FOREIGN KEY FK_60A348B7A674A03E');
        $this->addSql('DROP INDEX IDX_60A348B79D86650F ON commentarys');
        $this->addSql('DROP INDEX IDX_60A348B7A674A03E ON commentarys');
    }
}
