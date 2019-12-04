/*première*/ 
// cr�e un nouvel �l�ment div
let newDiv = document.createElement("p");
// et lui donne un peu de contenu
let newContent = document.createTextNode('Coucou toi');
// ajoute le n�ud texte au nouveau div cr��
newDiv.appendChild(newContent);

// ajoute le nouvel �l�ment cr�� et son contenu dans le DOM
let currentDiv = document.querySelector('p');

let div1 = document.body.insertBefore(newDiv, currentDiv);
div1.style.color="red";
console.log(div1);

/*deuxième*/ 

// cr�e un nouvel �l�ment div
let newDiv2 = document.createElement("p");
// et lui donne un peu de contenu
let newContent2 = document.createTextNode('comment vas tu ?');
// ajoute le n�ud texte au nouveau div cr��
newDiv2.appendChild(newContent2);

// ajoute le nouvel �l�ment cr�� et son contenu dans le DOM
let currentDiv2 = document.querySelector('p');

let div2 = document.body.insertBefore(newDiv2, currentDiv2);
div2.style.color="green";
console.log(div2);