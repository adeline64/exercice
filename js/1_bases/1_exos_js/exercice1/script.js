var maDiv = document.querySelector('div');
maDiv.style.color="green";
maDiv.style.marginTop = "65px";


    // cr�e un nouvel �l�ment div
    var newDiv = document.createElement("div");
    // et lui donne un peu de contenu
    var newContent = document.createTextNode('Coucou');
    // ajoute le n�ud texte au nouveau div cr��
    newDiv.appendChild(newContent);

    // ajoute le nouvel �l�ment cr�� et son contenu dans le DOM
    var currentDiv = document.querySelector('div');
    document.body.insertBefore(newDiv, currentDiv);

console.log(maDiv);