function affiche(titreAAfficher,texteAAfficher) {
	var maDiv = document.createElement("div");
	var monTitre = document.createElement("h1");
	var monParagraphe = document.createElement("p");
	monTitre.innerText = titreAAfficher;
	monParagraphe.innerText = texteAAfficher;
	maDiv.appendChild(monTitre);
	maDiv.appendChild(monParagraphe);
	document.body.appendChild(maDiv);
}

function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}

//Exo 1: on utilise un tableau
//var aTitre = ["Bienvenue !","Chapitre 1 : un chapitre pour débuter","Chapitre 2 : un autre chapitre","Chapitre 3 : encore un chapitre"];
//var aContenu = ["Bienvenue sur mon site ! Plein de lorem ipsum...","Paragraphe chapitre 1","Paragraphe chapitre 2","Paragraphe chapitre 3"];
//
////on boucle sur le tableau des titres
//for (var i=0; i < aTitre.length; i++) {
//	affiche(aTitre[i],aContenu[i]);
//}

//Exo 2: on utilise le JSON avec AJAX => JS => PHP => JS
//Chargement JSON, l'idée est de 
readTextFile("myjson.json", function(text){
    var data = JSON.parse(text);
    for (var i=0; i < data.length; i++) {
    	affiche(data[i].monTitre,data[i].monParagraphe);
    }
    
});