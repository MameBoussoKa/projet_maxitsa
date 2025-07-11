<?php
namespace App\Entite;
class Utilisateurs
{
    private $id;
    private $nom;
    private $prenom;
    private $login;
    private $password;
    private $typeUser; // TypeUser
    private $adress;
    private array $comptes = [];
    private $numero;
    private $transaction = [];
    private $numeroCarteIdentite;
    private $photoIdentite;

    public function __construct($id = null, $nom = null, $prenom = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getId() { return $this->id; }
    public function setId($id): self { $this->id = $id; return $this; }

    public function getNom() { return $this->nom; }
    public function setNom($nom): self { $this->nom = $nom; return $this; }

    public function getPrenom() { return $this->prenom; }
    public function setPrenom($prenom): self { $this->prenom = $prenom; return $this; }

    public function getLogin() { return $this->login; }
    public function setLogin($login): self { $this->login = $login; return $this; }

    public function getPassword() { return $this->password; }
    public function setPassword($password): self { $this->password = $password; return $this; }

    public function getTypeUser() { return $this->typeUser; }
    public function setTypeUser($typeUser): self { $this->typeUser = $typeUser; return $this; }

    public function getAdress() { return $this->adress; }
    public function setAdress($adress): self { $this->adress = $adress; return $this; }

    public function getComptes(): array { return $this->comptes; }
    public function addComptes($compte): self { $this->comptes[] = $compte; return $this; }

    public function getNumero() { return $this->numero; }
    public function setNumero($numero): self { $this->numero = $numero; return $this; }

    public function getNumeroCarteIdentite() { return $this->numeroCarteIdentite; }
    public function setNumeroCarteIdentite($numeroCarteIdentite): self { $this->numeroCarteIdentite = $numeroCarteIdentite; return $this; }

    public function getPhotoIdentite() { return $this->photoIdentite; }
    public function setPhotoIdentite($photoIdentite): self { $this->photoIdentite = $photoIdentite; return $this; }

    public function getTransaction(): array { return $this->transaction; }
    public function addTransaction($transaction): self { $this->transaction[] = $transaction; return $this; }
}