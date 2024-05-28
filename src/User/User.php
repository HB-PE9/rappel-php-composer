<?php

namespace App\User;

abstract class User
{
    public function __construct(
        protected string $name,
        protected string $firstname
    ) {
    }

    public function getFullName(): string
    {
        return $this->firstname . ' ' . $this->name;
    }

    abstract public function getInformations(): string;

    public function getName()
    {
        return $this->name;
    }
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }
    public function setFirstname($firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }
}
