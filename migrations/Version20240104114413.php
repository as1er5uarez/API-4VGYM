<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240104114413 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actividad CHANGE date date DATETIME NOT NULL, CHANGE idMonitor1 id_monitor1 INT NOT NULL, CHANGE idMonitor2 id_monitor2 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE monitor CHANGE telephone telephon VARCHAR(9) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actividad CHANGE date date DATE NOT NULL, CHANGE id_monitor1 idMonitor1 INT NOT NULL, CHANGE id_monitor2 idMonitor2 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE monitor CHANGE telephon telephone VARCHAR(9) NOT NULL');
    }
}
