<?php
namespace App\Entite;

enum TypeTransaction: string
{
    case DEPOT = 'depot';
    case TRANSFERE = 'transfere';
    case RETRAIT = 'retrait';
}

enum TypeCompte: string
{
    case PRINCIPAL = 'Principal';
    case SECONDAIRE = 'Secondaire';
}