<?php
    if ( ! empty( $_POST ) ) {
        if ( ! isset(
            $_POST['email'],
            $_POST['password']
            ) )
            
        {
            var_dump($_POST);
            echo "il manque une ou plusieurs donnees";
    
        } else {
            $managerUtilisateur = new ManagerUtilisateur();
            $managerUtilisateur->setDb( $db );
            $managerUtilisateur->add( $_POST );
        }
    }
?>

<form action="?page=inscription" method="post">
    <label for="email">email</label>
    <input type="email" name="email">
<br>
    <label for="password">password</label>
    <input type="password" name="password">

    <input type="submit" name="inscription" id="button" class="btn_danger" value="Inscription">
</form>