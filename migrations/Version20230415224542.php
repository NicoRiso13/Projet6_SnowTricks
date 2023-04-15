<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230415224542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentarys DROP FOREIGN KEY FK_60A348B79D86650F');
        $this->addSql('ALTER TABLE tricks DROP FOREIGN KEY FK_E1D902C19D86650F');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, firstname VARCHAR(50) NOT NULL, name VARCHAR(50) NOT NULL, picture VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE commentarys CHANGE user_id user_id INT DEFAULT NULL, CHANGE tricks_id tricks_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentarys ADD CONSTRAINT FK_60A348B7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentarys RENAME INDEX idx_60a348b79d86650f TO IDX_60A348B7A76ED395');
        $this->addSql('ALTER TABLE commentarys RENAME INDEX idx_60a348b7a674a03e TO IDX_60A348B73B153154');
        $this->addSql('ALTER TABLE tricks CHANGE name name VARCHAR(100) NOT NULL, CHANGE descritpion description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE tricks ADD CONSTRAINT FK_E1D902C1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE tricks RENAME INDEX idx_e1d902c19d86650f TO IDX_E1D902C1A76ED395');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentarys DROP FOREIGN KEY FK_60A348B7A76ED395');
        $this->addSql('ALTER TABLE tricks DROP FOREIGN KEY FK_E1D902C1A76ED395');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, surname VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, name VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, picture VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', roles JSON NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE commentarys CHANGE user_id user_id INT NOT NULL, CHANGE tricks_id tricks_id INT NOT NULL');
        $this->addSql('ALTER TABLE commentarys ADD CONSTRAINT FK_60A348B79D86650F FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE commentarys RENAME INDEX idx_60a348b7a76ed395 TO IDX_60A348B79D86650F');
        $this->addSql('ALTER TABLE commentarys RENAME INDEX idx_60a348b73b153154 TO IDX_60A348B7A674A03E');
        $this->addSql('ALTER TABLE tricks CHANGE name name VARCHAR(50) NOT NULL, CHANGE description descritpion LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE tricks ADD CONSTRAINT FK_E1D902C19D86650F FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE tricks RENAME INDEX idx_e1d902c1a76ed395 TO IDX_E1D902C19D86650F');
    }
}
