<?php

debug($_POST);
if (!empty($_SESSION['utilisateur'])) {

$utilisateur=$_SESSION['utilisateur'];
// var_dump($utilisateur);

if ( ! empty( $_POST ) ) {

    if ( ! isset(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email']
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

<div class="well">
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="home">
        <h2>Profil</h2>
            <form id="tab">
                <label>Nom : </label>
                <h3><?php echo $utilisateur->getNom() ?></h3>
                <label>Prenom : </label>
                <h3> <?php echo $utilisateur->getPrenom() ?> </h3>
                <label>Email : </label>
                <h3><?php echo $utilisateur->getEmail() ?><h3>
                
                
            </form>
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