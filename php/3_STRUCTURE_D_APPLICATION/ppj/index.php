<!DOCTYPE html>
<html lang="en">


<?php



include "config/config.php";
include "$Template/template-parts/head.php";

?>
<body>
<?php

include "$Template/template-parts/menu.php";


if (!empty($_GET['page'])&& $_GET['page'] == 'about')
	    { include_once "$Template/pages/about.php"; }
	    else if (!empty($_GET['page'])&& $_GET['page'] == 'blog')
	    { include_once "$Template/pages/blog.php"; }
	    else if (!empty($_GET['page'])&& $_GET['page'] == 'contact')
	    { include_once "$Template/pages/contact.php";}
	    else if (!empty($_GET['page'])&& $_GET['page'] == 'produits')
	    { include_once "$Template/pages/produits.php";}
	    else { //par defaut accueil
            include_once "$Template/pages/accueil.php"; 
        }
        
        include "$Template/template-parts/footer.php"
    ?>
</body>

</html>
