<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210420162841 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE analyse CHANGE date_analyse date_analyse DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE analyse_type1 CHANGE creneau creneau VARCHAR(255) DEFAULT NULL, CHANGE heure_analyse heure_analyse TIME DEFAULT NULL, CHANGE resultat resultat DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE analyse_type2 CHANGE taux_hb_a1c taux_hb_a1c VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossiermedical CHANGE poids poids DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE rendez_vous CHANGE raison raison VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE analyse CHANGE date_analyse date_analyse DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE analyse_type1 CHANGE creneau creneau VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE heure_analyse heure_analyse TIME DEFAULT \'NULL\', CHANGE resultat resultat DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE analyse_type2 CHANGE taux_hb_a1c taux_hb_a1c VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE dossiermedical CHANGE poids poids DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE rendez_vous CHANGE raison raison VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
