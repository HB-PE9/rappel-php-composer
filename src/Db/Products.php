<?php

namespace App\Db;

class Products extends Table
{
    public function __construct()
    {
        parent::__construct('produits');
    }

    public function insert(array $data)
    {
        $query = $this->connection->prepare('INSERT INTO produits (id,nom_produit,date_ajout,quantite,prix,reference,hauteur,largeur,poids,prix_expedition) VALUES (:id,:nom_produit,:date_ajout,:quantite,:prix,:reference,:hauteur,:largeur,:poids,:prix_expedition)');
        $query -> execute([
            'id' => $data['id'],
            'nom_produit' => $data['nom_produit'],
            'date_ajout' => $data['date_ajout'],
            'quantite' => $data['quantite'],
            'prix' => $data['prix'],
            'reference' => $data['reference'],
            'hauteur' => $data['hauteur'],
            'largeur' => $data['largeur'],
            'poids' => $data['poids'],
            'prix_expedition' => $data['prix_expedition']
        ]);
        return $query -> execute();
    }
}
