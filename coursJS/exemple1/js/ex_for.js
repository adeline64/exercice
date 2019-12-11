let jours = ["lundi", "mardi", "mercredi","jeudi","vendredi","samedi","dimanche"];

//afficher tous les éléments du tableau 
console.groupCollapsed("parcour du tableau avec indice");
for (let i = 0; i < jours.length; i++) {
    // i représente l'indice du tableau.
    //premier élément i=0
    console.log(jours[i]);
    
}
console.groupEnd();

console.groupCollapsed("parcour du tableau avec for off");
for (let elem of jours){
    console.log(elem);
}
console.groupEnd();

console.groupCollapsed("parcour du tableau avec for in");
for (let index in jours){
    console.log(jours[index]);
}
console.groupEnd();

console.groupCollapsed("parcour du tableau avec forEach");
jours.forEach(function(jour){
    console.log(jour);
    
});
console.groupEnd();

console.groupCollapsed("parcour du tableau avec forEach et function fléché concise");
jours.forEach(jour => console.log(jour));
console.groupEnd();

console.groupCollapsed("parcour du tableau avec forEach et function fléché");
jours.forEach(jour => {
    console.log(jour);
}
);
console.groupEnd();