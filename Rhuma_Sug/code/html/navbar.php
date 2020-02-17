<?php

if (!empty($_SESSION['utilisateur'])) {
	/*
	 * Nous sommes dans le cas d'un utilsateur connect?
	 */
?>


<nav class="mb-4 navbar navbar-expand-lg navbar-dark bg-unique">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="?page=accueil">Accueil <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=about">A Propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=panier">Panier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=deconnexion">Deconnexion</a>
                        </li>
                    </ul>
                   
                </div>
            </nav>

<?php
    }else{

?>



<nav class="mb-4 navbar navbar-expand-lg navbar-dark bg-unique">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="?page=accueil">Accueil <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=about">A Propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=connexion">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=inscription">Inscription</a>
                        </li>
                    </ul>
                   
                </div>
            </nav>

            <?php
    }