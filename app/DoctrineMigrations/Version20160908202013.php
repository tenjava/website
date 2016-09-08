<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20160908202013 extends AbstractMigration {

    public function up(Schema $schema) {
        $this->addSql([
            'create table roles (
                id   serial primary key not null,
                name character varying (255) not null
            )',
            'create table users (
                id       serial primary key not null,
                username character varying (255) unique not null,
                email    character varying (255) unique not null,
                role_id  integer references roles(id) not null
            )',
            'create table donations (
                id           serial primary key not null,
                user_id      integer references users(id), -- not null, can be anonymous
                amount       numeric(2) not null,
                payment_type character varying (255) not null,
                message      text
            )',
            'create table teams (
                id            serial primary key not null,
                leader        integer references users(id) not null,
                name          character varying (255) unique not null,
                general_rules text,
                prize_rules   text
            )',
            'create table team_members (
                user_id              integer references users(id) not null,
                team_id              integer references teams(id) not null,
                application_accepted boolean default false not null,
                agreed_on_team_name  boolean default true not null,
                agreed_on_rules      boolean default true not null,
                constraint team_members_pk primary key (user_id, team_id)
            )',
            'insert into roles (name) values (\'contestant\'), (\'judge\'), (\'organizer\')'
        ]);
    }

    public function down(Schema $schema) {
        $this->addSql([
            'drop table team_members',
            'drop table teams',
            'drop table donations',
            'drop table users',
            'drop table roles',
        ]);
    }
}
