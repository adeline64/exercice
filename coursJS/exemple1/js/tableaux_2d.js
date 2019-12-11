console.log("tableaux 2d");

let tab=[
    [3,99],
    [45,1],
    [10,111]
];

// for (let i = 0; i < tab.length; i++) {
//    console.log(tab[i]);

//    for(let j=0; j<tab[i].length;j++){
//        console.log(tab[i][j]);
//    }
    
// }

// for (let elem of tab) {

//     console.log(elem);

//     for(let nb of elem){
//         console.log(nb);
//     }
    
// }

// for (let i in tab) {
//     console.log(tab[i]);
//     for (let j in tab[i]) {
//         console.log(tab[i][j]);
//     }
// }

tab.forEach(function(elem){
    console.log(elem);
    elem.forEach(function (nb) {
        console.log(nb);
    });
});