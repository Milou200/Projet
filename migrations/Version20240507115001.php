<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240507115001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_maillot (user_id INT NOT NULL, maillot_id INT NOT NULL, INDEX IDX_FDBA9D20A76ED395 (user_id), INDEX IDX_FDBA9D201630EB04 (maillot_id), PRIMARY KEY(user_id, maillot_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE user_maillot ADD CONSTRAINT FK_FDBA9D20A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_maillot ADD CONSTRAINT FK_FDBA9D201630EB04 FOREIGN KEY (maillot_id) REFERENCES maillot (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_maillot DROP FOREIGN KEY FK_FDBA9D20A76ED395');
        $this->addSql('ALTER TABLE user_maillot DROP FOREIGN KEY FK_FDBA9D201630EB04');
        $this->addSql('DROP TABLE user_maillot');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
