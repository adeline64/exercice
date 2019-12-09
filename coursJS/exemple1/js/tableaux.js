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
} */

for(let elem of tab){
    console.log(elem);
}