<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210531131333 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidate (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, nationality VARCHAR(255) NOT NULL, passport VARCHAR(255) NOT NULL, curriculum_vitae VARCHAR(255) NOT NULL, profil_picture VARCHAR(255) NOT NULL, current_location VARCHAR(255) NOT NULL, date_of_birth DATE NOT NULL, email_adress VARCHAR(255) NOT NULL, confirm_email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, name_of_society VARCHAR(255) NOT NULL, type_of_activity VARCHAR(255) NOT NULL, name_of_contact VARCHAR(255) NOT NULL, position_occupied_by_the_contact VARCHAR(255) NOT NULL, number_of_contact VARCHAR(255) NOT NULL, email_of_contact VARCHAR(255) NOT NULL, notes VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE candidate');
        $this->addSql('DROP TABLE client');
    }
}
