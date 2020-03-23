<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200323153646 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE module (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, gamme_id INT DEFAULT NULL, dimension_id INT DEFAULT NULL, nom_module VARCHAR(255) NOT NULL, marge_entreprise DOUBLE PRECISION NOT NULL, marge_commerciaux DOUBLE PRECISION NOT NULL, INDEX IDX_C242628C18272 (projet_id), INDEX IDX_C242628D2FD85F1 (gamme_id), INDEX IDX_C242628277428AD (dimension_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE module ADD CONSTRAINT FK_C242628C18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE module ADD CONSTRAINT FK_C242628D2FD85F1 FOREIGN KEY (gamme_id) REFERENCES gamme (id)');
        $this->addSql('ALTER TABLE module ADD CONSTRAINT FK_C242628277428AD FOREIGN KEY (dimension_id) REFERENCES dimension (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE module');
    }
}
