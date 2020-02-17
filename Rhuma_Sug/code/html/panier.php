<?php

if (!empty($_SESSION['utilisateur'])) {
    echo '<br>RECUP PANIER';
    //recup panier
    $managerPanier = new ManagerPanier();
    $managerPanier->setDb($db);
    var_dump($managerPanier);
    $panier = $managerPanier->getById($_SESSION['utilisateur']->getId_utilisateur());
    var_dump($panier);
    if (empty($panier)) {
        //pas de panier
        echo '<br>Votre panier est actuellement vide';
        var_dump($panier);
    } else {
        echo '<br>PANIER EXISTANT => AFFICHAGE';
        while ($data = $panier->fetch()) {
            echo'<br>blabla';
            //echo '<br>'.$data['nom'];
            //echo '<br>'.$data['description'];
            var_dump($data);
        }
    }
}else{
    echo "<h3>Attention</h3><p>Vous n'êtes pas connecté !!!</p>";
}