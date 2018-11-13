<?php
$VALEUR_hote='f2i.clq0wm9srxgn.eu-west-3.rds.amazonaws.com';
$VALEUR_port='3306';
$VALEUR_nom_bd='f2i';
$VALEUR_user='f2i';
$VALEUR_mot_de_passe='Ght3DVD2q';
$connexion = new PDO('mysql:host='.$VALEUR_hote.';port='.$VALEUR_port.';dbname='.$VALEUR_nom_bd, $VALEUR_user, $VALEUR_mot_de_passe);

$resultats=$connexion->query("SELECT * FROM students ");
$resultats->setFetchMode(PDO::FETCH_OBJ);
while( $resultat = $resultats->fetch() )
{
        echo 'stagiaire : '.$resultat->Nom.'<br>';
}
$resultats->closeCursor();

?>
