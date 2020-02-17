<?php

if (!empty($_SESSION['utilisateur'])) {
	/*
	 * Nous sommes dans le cas d'un utilsateur connecté
	 */
   
            $managerProduits = new ManagerProduits();
            $managerProduits->setDb( $db );
            $produits = $managerProduits->getAllProduits();
    
        // var_dump ($produits);

        

        
    

?>

<div class="container-fluid bg-1 text-center">
        <h3 class="margin">Nos Produits</h3>
        <br>
        <div class="row">
            <div class="col-sm">
                
                    <?php
                        foreach($produits as $produit) : ?>
                        
                        <h3>Nom : <?= $produit['nom'] ?></h3>
                        <p>Description : <?= $produit['description'] ?></p>
                <img src="image/<?= $produit['image']; ?>" class="img-responsive margin" style="width:30%" alt="Image">
                    <a href="?page=panier&id=<?= $produit['id']?>" class="bouton">Ajouter</a>
                <br>
                <?php
                endforeach ?>
                
            </div>
         </div>
    </div>
<br>

<?php
}else{
?>

<div class="container-fluid bg-1 text-center">
        <h3 class="margin">Nos Produits</h3>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="image/image1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="image/image2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="image/image3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="image/image4.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="image/image5.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="image/image6.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
                <img src="image/image7.jpg" class="img-responsive margin" style="width:100%" alt="Image">
            </div>
        </div>
    </div>


    <?php
}