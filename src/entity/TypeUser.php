<?php

namespace App\Entite;

class TypeUser
{
    private $id;
    private $nom;

    public function getId() { return $this->id; }
    public function setId($id): self { $this->id = $id; return $this; }

    public function getNom() { return $this->nom; }
    public function setNom($nom): self { $this->nom = $nom; return $this; }
}