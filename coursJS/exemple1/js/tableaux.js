let tab = [56, 45, 2, 0, 111];

//console.log(tab.length);

//console.log(tab[0]);

console.log(tab);
/*
for(let i=0; i<4; i=i+1){//correspond à for(let i=0; i<4, i++)
    console.log(i);
} 

for(let i=0; tab.length; i++){
    console.log(i);
} 

for(let i=0; i<tab.length; i++){
    console.log(tab[i]);
} 

for(let elem of tab){
    console.log(elem);
}*/

console.group("Parcours du tableau avec les indices")
for(let i=0; i<tab.length; i++){
    console.log(i);

} 
//console.log("valeur de i : " +i); //i id not defined
console.groupEnd();

//parcour du tableau avec for ... of
console.group("parcours du tableau avec for ... of")
for(let toto of tab){
    console.log(toto);
}
console.groupEnd();//fin du groupe

//parcour du tableau avec for ... in
console.group("parcours du tableau avec for ... in")
for(let index in tab){
    console.log(tab[index]);
}
console.groupEnd(); //fin du groupe

//parcour du tableau avec foreach
console.group("parcours du tableau avec foreach") 
tab.forEach(function(elem){
    console.log(elem);
})
console.groupEnd(); //fin du groupe

//parcour du tableau avec foreach et notation fléché
console.group("parcours du tableau avec foreach et mention fléché") 
tab.forEach((elem) => console.log(elem) );
console.groupEnd(); //fin du groupe