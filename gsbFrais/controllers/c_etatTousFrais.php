<?php
/** @var PdoGsb $pdo */
include 'views/v_sommaire.php';
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];

//var_dump($test=$pdo->getMontantForfaitMois($idVisiteur,$id));

switch($action){
	case 'SelectionnerVF':{ 
        $lesVisiteurs=$pdo->getVisiteurs();
        $lesTypesForfaits=$pdo->getFrais();
        
        $VisiteurASelectionner = $lesVisiteurs[0]['id'];
        $VisiteurASelectionner = $lesVisiteurs[0]['id'];
        
        include("views/v_listeVF.php");
        break;

    }
    case 'voirEtatTousFrais':{ 
        $leVisiteur = $_REQUEST['lstVisiteurs'];
        $lesVisiteurs=$pdo->getVisiteurs();
		$VisiteurASelectionner = $leVisiteur;


        $leTypeForfait = $_REQUEST['lstFrais'];
        $lesTypesForfaits=$pdo->getFrais();
        $TypeForfaitASelectionner = $leTypeForfait;

        
        include("views/v_listeVF.php");

        $lesFraisForfaitVisiteur = $pdo->getMontantForfaitMois($leVisiteur,$leTypeForfait);
        
        
        include("views/v_etattousfrais.php");
        break;

    }
        
    }