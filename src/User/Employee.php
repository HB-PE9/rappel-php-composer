<?php

namespace App\User;

class Employee extends User
{
    public function __construct(
        string $name,
        string $firstname,
        private string $empNumber
    ) {
        parent::__construct($name, $firstname);
    }

    public function getInformations(): string
    {
        $infos = $this->getFullName() . ' (EMPLOYEE)';
        $infos .= " N°" . $this->empNumber;

        return $infos;
    }

    public function getEmpNumber()
    {
        return $this->empNumber;
    }
    public function setEmpNumber($empNumber): self
    {
        $this->empNumber = $empNumber;
        return $this;
    }
}
