<?php declare(strict_types=1);

namespace TenjavaBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Team {
    private $id;
    private $name;
    private $generalRules;
    private $prizeRules;
    private $leader;
    private $users;

    public function __construct() {
        $this->users = new ArrayCollection();
    }

    public function getId(): integer {
        return $this->id;
    }

    public function setName(string $name): Team {
        $this->name = $name;

        return $this;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setGeneralRules(?string $generalRules): Team {
        $this->generalRules = $generalRules;

        return $this;
    }

    public function getGeneralRules(): ?string {
        return $this->generalRules;
    }

    public function setPrizeRules(?string $prizeRules): Team {
        $this->prizeRules = $prizeRules;

        return $this;
    }

    public function getPrizeRules(): ?string {
        return $this->prizeRules;
    }

    public function setLeader(User $leader = null): Team {
        $this->leader = $leader;

        return $this;
    }

    public function getLeader(): User {
        return $this->leader;
    }

    public function addUser(User $user): Team {
        $this->users[] = $user;

        return $this;
    }

    public function removeUser(User $user) {
        $this->users->removeElement($user);
    }

    public function getUsers(): Collection {
        return $this->users;
    }
}

