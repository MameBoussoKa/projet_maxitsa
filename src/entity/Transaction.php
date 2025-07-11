<?php

namespace App\Entite;

class Transaction
{
    private $id;
    private $date;
    private $typeTransaction; 
    private $user; 
    private $compte;
    private $montant;

    public function __construct($id = null, $date = null, $typeTransaction = null, $user = null, $compte = null, $montant = 0)
    {
        $this->id = $id;
        $this->date = $date;
        $this->typeTransaction = $typeTransaction;
        $this->user = $user;
        $this->compte = $compte;
        $this->montant = $montant;
    }

    public function getId() { return $this->id; }
    public function setId($id): self { $this->id = $id; return $this; }

    public function getDate() { return $this->date; }
    public function setDate($date): self { $this->date = $date; return $this; }

    public function getTypeTransaction() { return $this->typeTransaction; }
    public function setTypeTransaction($typeTransaction): self { $this->typeTransaction = $typeTransaction; return $this; }

    public function getUser() { return $this->user; }
    public function setUser($user): self { $this->user = $user; return $this; }

    public function getCompte() { return $this->compte; }
    public function setCompte($compte): self { $this->compte = $compte; return $this; }

    public function getMontant() { return $this->montant; }
    public function setMontant($montant): self { $this->montant = $montant; return $this; }
}