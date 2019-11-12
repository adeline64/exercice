var maDiv = document.querySelector('div');
maDiv.style.color="green";
maDiv.style.marginTop = "65px";


    // crée un nouvel élément div
    var newDiv = document.createElement("div");
    // et lui donne un peu de contenu
    var newContent = document.createTextNode('Coucou');
    // ajoute le nœud texte au nouveau div créé
    newDiv.appendChild(newContent);

    // ajoute le nouvel élément créé et son contenu dans le DOM
    var currentDiv = document.querySelector('div');
    document.body.insertBefore(newDiv, currentDiv);

console.log(maDiv);