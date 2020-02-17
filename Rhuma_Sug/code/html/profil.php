<?php

debug($_POST);
if (!empty($_SESSION['utilisateur'])) {

$utilisateur=$_SESSION['utilisateur'];
// var_dump($utilisateur);

if ( ! empty( $_POST ) ) {

    if ( ! isset(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['telephone'],
        $_POST['prenom']
        ) )
    {
        echo "il manque une ou plusieurs donnees";
        

    } else {
        $managerUtilisateur = new ManagerUtilisateur();
        $managerUtilisateur->setDb( $db );
        $utilisateur = $managerUtilisateur->read($id);

    }
}
/*
* Nous sommes dans le cas d'un utilsateur connect�
*/

?>

<div class="container-fluid well span6">
	<div class="row-fluid">
        
        <div class="span8">
            <h3><?php echo $utilisateur->getNom() ?> <?php echo $utilisateur->getPrenom() ?></h3>
            <h6><?php echo $utilisateur->getEmail() ?></h6>
            <h6><?php echo $utilisateur->getVille() ?></h6>
            <h6><?php echo $utilisateur->getTelephone() ?></h6>
        </div>
        
        
    </div>
</div>

<div><h2>Historique des achats</h2></div>



<div><h2>Mode de Paiement</h2></div>

<img src="image/carte.png">

  <?php

}else{
?>
<p>
        ATTENTION !!!!
        Vous etes pas connecte
    </p>
<?php
}