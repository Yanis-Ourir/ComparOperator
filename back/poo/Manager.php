<?php

class Manager
{
    private $bdd;

    public function __construct($dbname)
    {
        try {
            $bdd = new PDO(
                "mysql:host=localhost;dbname={$dbname};charset=utf8",
                'root',
                '',
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        return $this->bdd;
    }

    public function getAllDestination()
    {
        /* REQUETE SQL POUR  RECUP TOUTES LES DESTINATIONS */
        $sqlAllDestination = "SELECT * FROM destination";
        $destinationList = $this->bdd->prepare($sqlAllDestination);
        $destinationList->execute();
        $destinations = $destinationList->fetchAll();
    }

    public function getOperatorByDestination()
    {
        /* REQUETE SQL POUR  RECUP TOUTES LES DESTINATIONS D'UN OPERATEUR */
    }

    public function createReview($pseudo, $comment)
    {
        /* REQUETE SQL POUR QUE L'UTILISATEUR COMMENTE UN TO */
        $sqlNewComment = "INSERT INTO review (id, 'message', author) VALUES (NULL, $comment, $pseudo)";
        $this->bdd->exec($sqlNewComment);

        $sqlUserId = $this->bdd->prepare("SELECT id FROM review WHERE author = '$pseudo'");
        $userID = $sqlUserId->execute();
        $wantedID = $sqlUserId->fetchColumn();

        
    }

    public function getReviewByOperatorId()
    {
        /* REQUETE SQL POUR PRENDRE LES NOTES DES UTILISATEURS PAR RAPPORT AU TO */
    }

    public function getAllOperator()
    {
        /* OBTENIR TOUS LES OPERATEURS */
        $sqlAllOperators = "SELECT * FROM tour_operator";
        $operatorList = $this->bdd->prepare($sqlAllOperators);
        $operatorList->execute();
        $operators = $operatorList->fetchAll();
    }

    public function updateOperatorToPremium()
    {
        /* REQUETE SQL POUR RENDRE UN OPERATOR PREMIUM */
    }

    public function createTourOperator($toName, $toLink, $toGrade, $toTotalGrade, $toPremium)
    {
        /* REQUETE SQL POUR CREER UN NOUVEAU TOUR OPERATOR */
        $sqlNewOperator = "INSERT INTO tour_operator (id, name, link, grade_count, grade_total, is_premium) VALUES (NULL, $toName, $toLink, $toGrade, $toTotalGrade, $toPremium)";
        $this->bdd->exec($sqlNewOperator);
    }

    public function createDestination($location, $price, $image)
    {
        /* REQUETE SQL POUR CREER UNE DESTINATION */
        $sqlNewDestination = "INSERT INTO destination (id_destination, location, price, image) VALUES (NULL, $location, $price, $image)";
        $this->bdd->exec($sqlNewDestination);
    }
}

?>