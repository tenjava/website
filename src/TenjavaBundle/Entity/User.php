<?php declare(strict_types=1);

namespace TenjavaBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class User {
    private $id;
    private $username;
    private $email;
    private $role;
    private $team;

    public function __construct() {
        $this->team = new ArrayCollection();
    }

    public function getId(): int {
        return $this->id;
    }

    public function setUsername(string $username): User {
        $this->username = $username;

        return $this;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function setEmail(string $email): User {
        $this->email = $email;

        return $this;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setRole(Role $role): User {
        $this->role = $role;

        return $this;
    }

    public function getRole(): Role {
        return $this->role;
    }

    public function addTeam(Team $team): User {
        $this->team[] = $team;

        return $this;
    }

    public function removeTeam(Team $team) {
        $this->team->removeElement($team);
    }

    public function getTeam(): Collection {
        return $this->team;
    }
}

