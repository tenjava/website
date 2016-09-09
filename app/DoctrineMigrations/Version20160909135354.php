<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20160909135354 extends AbstractMigration {

    public function up(Schema $schema) {
        $this->addSql([
            'alter table teams add column max_size integer default 2 not null',
            'alter table teams add column private boolean default true not null',
        ]);
    }

    public function down(Schema $schema) {
        $this->addSql([
            'alter table teams drop column max_size',
            'alter table teams drop column private',
        ]);
    }
}
