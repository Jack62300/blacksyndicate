<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190510162701 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE addon_account CHANGE name name VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE addon_inventory CHANGE name name VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE datastore CHANGE name name VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE items CHANGE name name VARCHAR(50) NOT NULL, CHANGE rare rare INT NOT NULL');
        $this->addSql('ALTER TABLE jobs CHANGE name name VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE jsfour_criminalrecord CHANGE offense offense VARCHAR(160) NOT NULL, CHANGE classified classified INT NOT NULL');
        $this->addSql('ALTER TABLE jsfour_criminaluserinfo CHANGE identifier identifier VARCHAR(160) NOT NULL');
        $this->addSql('ALTER TABLE jsfour_dna CHANGE pk pk VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE licenses CHANGE type type VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE owned_bags CHANGE itemcount itemcount INT NOT NULL');
        $this->addSql('ALTER TABLE owned_vehicles CHANGE plate plate VARCHAR(12) NOT NULL, CHANGE state state TINYINT(1) NOT NULL COMMENT \'Etat de la voiture\', CHANGE `stored` `stored` TINYINT(1) NOT NULL, CHANGE fourrieremecano fourrieremecano TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE phone_messages CHANGE message message VARCHAR(255) NOT NULL, CHANGE isRead isRead INT NOT NULL, CHANGE owner owner INT NOT NULL');
        $this->addSql('ALTER TABLE rented_vehicles CHANGE plate plate VARCHAR(12) NOT NULL');
        $this->addSql('ALTER TABLE trucks CHANGE model model VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE user_accounts CHANGE money money DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE users CHANGE name name VARCHAR(50) DEFAULT NULL, CHANGE job_grade job_grade INT DEFAULT NULL, CHANGE is_dead is_dead TINYINT(1) DEFAULT NULL, CHANGE firstname firstname VARCHAR(50) DEFAULT NULL, CHANGE lastname lastname VARCHAR(50) DEFAULT NULL, CHANGE dateofbirth dateofbirth VARCHAR(25) DEFAULT NULL, CHANGE sex sex VARCHAR(10) DEFAULT NULL, CHANGE height height VARCHAR(5) DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicle_categories CHANGE name name VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE vehicle_categories_society CHANGE name name VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE vehicle_categories_spawn CHANGE name name VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE vehicles CHANGE model model VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE vehicle_sold CHANGE plate plate VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE vehicles_society CHANGE model model VARCHAR(60) NOT NULL');
        $this->addSql('ALTER TABLE vehicles_spawn CHANGE model model VARCHAR(60) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE addon_account CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE addon_inventory CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE datastore CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE items CHANGE name name VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, CHANGE rare rare INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE jobs CHANGE name name VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE jsfour_criminalrecord CHANGE offense offense VARCHAR(160) NOT NULL COLLATE latin1_swedish_ci, CHANGE classified classified INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE jsfour_criminaluserinfo CHANGE identifier identifier VARCHAR(160) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE jsfour_dna CHANGE pk pk VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE licenses CHANGE type type VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE owned_bags CHANGE itemcount itemcount INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE owned_vehicles CHANGE plate plate VARCHAR(12) NOT NULL COLLATE latin1_swedish_ci, CHANGE state state TINYINT(1) DEFAULT \'0\' NOT NULL COMMENT \'Etat de la voiture\', CHANGE `stored` `stored` TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE fourrieremecano fourrieremecano TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE phone_messages CHANGE message message VARCHAR(255) DEFAULT \'0\' NOT NULL COLLATE latin1_swedish_ci, CHANGE isRead isRead INT DEFAULT 0 NOT NULL, CHANGE owner owner INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE rented_vehicles CHANGE plate plate VARCHAR(12) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE trucks CHANGE model model VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE user_accounts CHANGE money money DOUBLE PRECISION DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE users CHANGE name name VARCHAR(50) DEFAULT \'\' COLLATE latin1_swedish_ci, CHANGE job_grade job_grade INT DEFAULT 0, CHANGE is_dead is_dead TINYINT(1) DEFAULT \'0\', CHANGE firstname firstname VARCHAR(50) DEFAULT \'\' COLLATE latin1_swedish_ci, CHANGE lastname lastname VARCHAR(50) DEFAULT \'\' COLLATE latin1_swedish_ci, CHANGE dateofbirth dateofbirth VARCHAR(25) DEFAULT \'\' COLLATE latin1_swedish_ci, CHANGE sex sex VARCHAR(10) DEFAULT \'\' COLLATE latin1_swedish_ci, CHANGE height height VARCHAR(5) DEFAULT \'\' COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE vehicle_categories CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE vehicle_categories_society CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE vehicle_categories_spawn CHANGE name name VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE vehicle_sold CHANGE plate plate VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE vehicles CHANGE model model VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE vehicles_society CHANGE model model VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE vehicles_spawn CHANGE model model VARCHAR(60) NOT NULL COLLATE latin1_swedish_ci');
    }
}
