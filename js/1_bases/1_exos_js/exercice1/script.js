let maDiv = document.querySelector('div');
maDiv.style.color="green";
maDiv.style.textAlign ="justify";
console.log(maDiv);

    // cr�e un nouvel �l�ment div
    let newDiv = document.createElement("div");
    // et lui donne un peu de contenu
    let newContent = document.createTextNode('Coucou');
    // ajoute le n�ud texte au nouveau div cr��
    newDiv.appendChild(newContent);
    
    // ajoute le nouvel �l�ment cr�� et son contenu dans le DOM
    let currentDiv = document.querySelector('div');
    
    let div2 = document.body.insertBefore(newDiv, currentDiv);
    div2.style.marginRight = "auto";
    

let divTransition = document.createElement('div');
document.body.insertBefore(divTransition, currentDiv);
