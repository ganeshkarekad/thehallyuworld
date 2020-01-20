<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200119195046 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE article_link (id INT AUTO_INCREMENT NOT NULL, article_id INT NOT NULL, i_tunes VARCHAR(255) NOT NULL, apple_music VARCHAR(255) DEFAULT NULL, google_play VARCHAR(255) DEFAULT NULL, saavn VARCHAR(255) DEFAULT NULL, you_tube VARCHAR(255) DEFAULT NULL, yt_music VARCHAR(255) DEFAULT NULL, gaana VARCHAR(255) DEFAULT NULL, wynk VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_86EE1EF07294869C (article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE social_media (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, facebook VARCHAR(255) DEFAULT NULL, twitter VARCHAR(255) DEFAULT NULL, instagram VARCHAR(255) DEFAULT NULL, site VARCHAR(255) DEFAULT NULL, tiktok VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, is_visible TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_20BC159EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article_link ADD CONSTRAINT FK_86EE1EF07294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE social_media ADD CONSTRAINT FK_20BC159EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE article_link');
        $this->addSql('DROP TABLE social_media');
    }
}
