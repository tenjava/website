<?php

namespace TenjavaBundle\Entity;

class Donation {
    private $id;
    private $amount;
    private $paymentType;
    private $message;
    private $user;

    public function getId(): int {
        return $this->id;
    }

    public function setAmount(float $amount): Donation {
        $this->amount = $amount;

        return $this;
    }

    public function getAmount(): string {
        return $this->amount;
    }

    public function setPaymentType(string $paymentType): Donation {
        $this->paymentType = $paymentType;

        return $this;
    }

    public function getPaymentType(): string {
        return $this->paymentType;
    }

    public function setMessage(?string $message): Donation {
        $this->message = $message;

        return $this;
    }

    public function getMessage(): ?string {
        return $this->message;
    }

    public function setUser(?User $user): Donation {
        $this->user = $user;

        return $this;
    }

    public function getUser(): ?User {
        return $this->user;
    }
}

