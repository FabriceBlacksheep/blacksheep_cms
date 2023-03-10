<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230221154233 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agence_adresse DROP FOREIGN KEY FK_FFAB20223256915B');
        $this->addSql('DROP TABLE agence_adresse');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agence_adresse (id INT AUTO_INCREMENT NOT NULL, relation_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_FFAB20223256915B (relation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE agence_adresse ADD CONSTRAINT FK_FFAB20223256915B FOREIGN KEY (relation_id) REFERENCES agence (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
