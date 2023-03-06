<?php

class Manager
{
    private $bdd;

    public function __construct()
    {
        $this->connexionBdd();
    }

    public function connexionBdd()
    {
        try {
            $bdd = new PDO(
                'mysql:host=localhost;dbname=compare-op_bdd;charset=utf8',
                'root',
                '',
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        return $bdd;
    }

    public function getAllDestination()
    {
        /* REQUETE SQL POUR  RECUP TOUTES LES DESTINATIONS */
    }

    public function getOperatorByDestination()
    {
        /* REQUETE SQL POUR  RECUP TOUTES LES DESTINATIONS */
    }

    public function createReview()
    {
        /* REQUETE SQL POUR QUE L'UTILISATEUR COMMENTE UN TO */
    }

    public function getReviewByOperatorId()
    {
        /* REQUETE SQL POUR PRENDRE LES NOTES DES UTILISATEURS PAR RAPPORT AU TO */
    }

    public function getAllOperator()
    {
        /* OBTENIR TOUS LES OPERATEURS */
    }

    public function updateOperatorToPremium()
    {
        /* REQUETE SQL POUR RENDRE UN OPERATOR PREMIUM */
    }

    public function createTourOperator()
    {
        /* REQUETE SQL POUR CREER UN NOUVEAU TOUR OPERATOR */
    }

    public function createDestination()
    {
        /* REQUETE SQL POUR CREER UNE DESTINATION */
    }
}
