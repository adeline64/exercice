<?php

if (!empty($_SESSION['utilisateur'])) {
	/*
	 * Nous sommes dans le cas d'un utilsateur connect?
	 */
?>

<nav class="mb-4 navbar navbar-expand-lg navbar-dark bg-unique">
                <a class="navbar-brand" href="?page=accueil">Accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>

            <?php
}else{
?>
    <nav class="mb-4 navbar navbar-expand-lg navbar-dark bg-unique">
    <a class="navbar-brand" href="?page=accueil">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="?page=inscription">Inscription <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=connexion">connexion</a>
            </li>
        </ul>
    </div>
</nav>

  <?php
}