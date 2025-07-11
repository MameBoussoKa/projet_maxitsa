<?php

namespace App\Entite;

class Compte
{
    private $id;
    private $numero;
    private $typeCompte; 
    private $dateCreation;
    private $user; 
    private $solde;
    private array $transaction = [];

    public function __construct($id = null, $numero = null, $typeCompte = null, $dateCreation = null, $user = null, $solde = 0)
    {
        $this->id = $id;
        $this->numero = $numero;
        $this->typeCompte = $typeCompte;
        $this->dateCreation = $dateCreation;
        $this->user = $user;
        $this->solde = $solde;
        $this->transaction = [];
    }

    public function getId() { return $this->id; }
    public function setId($id): self { $this->id = $id; return $this; }

    public function getNumero() { return $this->numero; }
    public function setNumero($numero): self { $this->numero = $numero; return $this; }

    public function getTypeCompte() { return $this->typeCompte; }
    public function setTypeCompte($typeCompte): self { $this->typeCompte = $typeCompte; return $this; }

    public function getDateCreation() { return $this->dateCreation; }
    public function setDateCreation($dateCreation): self { $this->dateCreation = $dateCreation; return $this; }

    public function getUser() { return $this->user; }
    public function setUser($user): self { $this->user = $user; return $this; }

    public function getSolde() { return $this->solde; }
    public function setSolde($solde): self { $this->solde = $solde; return $this; }

    public function getTransaction(): array { return $this->transaction; }
    public function addTransaction($transaction): self { $this->transaction[] = $transaction; return $this; }
}