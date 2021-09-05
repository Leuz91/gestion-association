<?php

    require_once('connexiondb.php');

    $idf=isset($_POST['id'])?$_POST['id']:0;

    $numcotis=isset($_POST['numcotis'])?$_POST['numcotis']:"";

    $datecotis=isset($_POST['date'])?$_POST['date']:"";

    $mois=isset($_POST['moi'])?$_POST['moi']:"";

    $motif=isset($_POST['motif'])?$_POST['motif']:"";

    $montant=isset($_POST['montant'])?$_POST['date']:"";

    $matricule=isset($_POST['matricule'])?strtoupper($_POST['matricule']):"";
    
    $requete="update filiere set nomFiliere=?,niveau=? where idFiliere=?";

    $params=array($numcotis,$datecotis,$mois,$motif,$motant,$matricule,$id);

    $resultat=$pdo->prepare($requete);

    $resultat->execute($params);
    
    
?>