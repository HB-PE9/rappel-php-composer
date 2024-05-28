<?php

namespace App\User;

class Client extends User
{
    public function __construct(
        string $name,
        string $firstname,
        private bool $premium,
        private string $clientNumber
    ) {
        parent::__construct($name, $firstname);
    }

    public function getInformations(): string
    {
        $infos = $this->getFullName() . ' (CLIENT) ';
        $infos .= ($this->premium) ? "PREMIUM" : "NORMAL";
        $infos .= " N°" . $this->clientNumber;

        return $infos;
    }

    public function getPremium()
    {
        return $this->premium;
    }
    public function setPremium($premium): self
    {
        $this->premium = $premium;
        return $this;
    }

    public function getClientNumber()
    {
        return $this->clientNumber;
    }
    public function setClientNumber($clientNumber): self
    {
        $this->clientNumber = $clientNumber;
        return $this;
    }
}
