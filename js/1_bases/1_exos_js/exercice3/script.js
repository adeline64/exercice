

/*première*/ 
// cr�e un nouvel �l�ment div
    let newDiv = document.createElement("div");
    // et lui donne un peu de contenu
    let newContent = document.createTextNode('Coucou toi');
    // ajoute le n�ud texte au nouveau div cr��
    newDiv.appendChild(newContent);
    
    // ajoute le nouvel �l�ment cr�� et son contenu dans le DOM
    let currentDiv = document.querySelector('div');
    
    let maDiv = document.body.insertBefore(newDiv, currentDiv);
console.log(maDiv);
