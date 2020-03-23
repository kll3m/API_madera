<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200323151307 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE composant (id INT AUTO_INCREMENT NOT NULL, dimension_id INT NOT NULL, gestion_stock_id INT DEFAULT NULL, nom_composant VARCHAR(255) NOT NULL, famille_composant VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_EC8486C9277428AD (dimension_id), UNIQUE INDEX UNIQ_EC8486C9C9047539 (gestion_stock_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE composant ADD CONSTRAINT FK_EC8486C9277428AD FOREIGN KEY (dimension_id) REFERENCES dimension (id)');
        $this->addSql('ALTER TABLE composant ADD CONSTRAINT FK_EC8486C9C9047539 FOREIGN KEY (gestion_stock_id) REFERENCES gestion_stock (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE composant');
    }
}
