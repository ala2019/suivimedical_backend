<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210408145922 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE analyse_type1');
        $this->addSql('ALTER TABLE dossiermedical CHANGE poids poids DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE analyse_type1 (id INT AUTO_INCREMENT NOT NULL, dossiermedical_id INT NOT NULL, date_analyse DATE NOT NULL, heure_analyse DATETIME NOT NULL, creneau VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, resultat DOUBLE PRECISION NOT NULL, confirmer_resultat DOUBLE PRECISION NOT NULL, notes VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, INDEX IDX_1ABA3345DAFFF6DA (dossiermedical_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE analyse_type1 ADD CONSTRAINT FK_1ABA3345DAFFF6DA FOREIGN KEY (dossiermedical_id) REFERENCES dossiermedical (id)');
        $this->addSql('ALTER TABLE dossiermedical CHANGE poids poids DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}