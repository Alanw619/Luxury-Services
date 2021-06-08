<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210531145631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, candidat_id_id INT DEFAULT NULL, offer_id_id INT DEFAULT NULL, INDEX IDX_E33BD3B8BFA9F225 (candidat_id_id), INDEX IDX_E33BD3B8FC69E3BE (offer_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8BFA9F225 FOREIGN KEY (candidat_id_id) REFERENCES candidate (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8FC69E3BE FOREIGN KEY (offer_id_id) REFERENCES job_offer (id)');
        $this->addSql('ALTER TABLE candidate ADD info_admin_candidate_id INT NOT NULL');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E44339B1384 FOREIGN KEY (info_admin_candidate_id) REFERENCES infos_admin_candidate (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C8B28E44339B1384 ON candidate (info_admin_candidate_id)');
        $this->addSql('ALTER TABLE infos_admin_candidate ADD notes VARCHAR(255) NOT NULL, ADD created_date DATE NOT NULL, ADD deleted_date DATE NOT NULL, ADD files VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD candidate_id_id INT NOT NULL, ADD email VARCHAR(255) NOT NULL, ADD password VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64947A475AB FOREIGN KEY (candidate_id_id) REFERENCES candidate (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64947A475AB ON user (candidate_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE candidature');
        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E44339B1384');
        $this->addSql('DROP INDEX UNIQ_C8B28E44339B1384 ON candidate');
        $this->addSql('ALTER TABLE candidate DROP info_admin_candidate_id');
        $this->addSql('ALTER TABLE infos_admin_candidate DROP notes, DROP created_date, DROP deleted_date, DROP files');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64947A475AB');
        $this->addSql('DROP INDEX UNIQ_8D93D64947A475AB ON user');
        $this->addSql('ALTER TABLE user DROP candidate_id_id, DROP email, DROP password');
    }
}
