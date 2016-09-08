<?php

namespace TenjavaBundle\Entity;

class Role {
    private $id;
    private $name;

    public function getId(): int {
        return $this->id;
    }

    public function setName(string $name): Role {
        $this->name = $name;

        return $this;
    }

    public function getName(): string {
        return $this->name;
    }
}

