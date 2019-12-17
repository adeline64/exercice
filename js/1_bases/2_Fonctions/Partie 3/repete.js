class repete {
    constructor() {
        this.titre = titre;
    }
}


function affiche(titreAAfficher,texteAAfficher) {
     //tu créées une div
     var maDiv = document.createElement("div");

     //tu créées un objet H1 nommé monTitre => tu écrase monTitre passé en paramètre
     var monTitre = document.createElement("h1");
 
     //tu créées un objet p nommé monParagraphe => tu écrase monParagraphe passé en paramètre
     var monParagraphe = document.createElement("p");
 
     monTitre.innerText = titreAAfficher;
     monParagraphe.innerText = texteAAfficher;
     maDiv.appendChild(monTitre);
     maDiv.appendChild(monParagraphe);
     document.body.appendChild(maDiv);
}

affiche("Bienvenue !","Bienvenue sur mon site ! Plein de lorem ipsum...");
affiche("Chapitre 1 : un chapitre pour débuter","Paragraphe chapitre 1");
affiche("Chapitre 2 : un autre chapitre","Paragraphe chapitre 2");
affiche("Chapitre 3 : encore un chapitre","Paragraphe chapitre 3");
/*
var maDiv = document.createElement("div");
var monTitre = document.createElement("h1");
var monParagraphe = document.createElement("p");
monTitre.innerText = "Bienvenue !";
monParagraphe.innerText = "Bienvenue sur mon site ! Plein de lorem ipsum...";
maDiv.appendChild(monTitre);
maDiv.appendChild(monParagraphe);
document.body.appendChild(maDiv);

var maDiv1 = document.createElement("div");
var monTitre1 = document.createElement("h1");
var monParagraphe1 = document.createElement("p");
monTitre1.innerText = "Chapitre 1 : un chapitre pour débuter";
monParagraphe1.innerText = "Paragraphe chapitre 1";
maDiv1.appendChild(monTitre1);
maDiv1.appendChild(monParagraphe1);
document.body.appendChild(maDiv1);

var maDiv3 = document.createElement("div");
var monTitre3 = document.createElement("h1");
var monParagraphe3 = document.createElement("p");
monTitre3.innerText = "Chapitre 2 : un autre chapitre";
monParagraphe3.innerText = "Paragraphe chapitre 2";
maDiv3.appendChild(monTitre3);
maDiv3.appendChild(monParagraphe3);
document.body.appendChild(maDiv3);

var maDiv4 = document.createElement("div");
var monTitre4 = document.createElement("h1");
var monParagraphe4 = document.createElement("p");
monTitre4.innerText = "Chapitre 3 : encore un chapitre";
monParagraphe4.innerText = "Paragraphe chapitre 3";
maDiv4.appendChild(monTitre4);
maDiv4.appendChild(monParagraphe4);
document.body.appendChild(maDiv4);
*/