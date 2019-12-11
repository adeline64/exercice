console.log("functions");



//déclaration de function
function direBonjour(nom){
    console.log("bonjour " + nom );
    
}
// appel a la function
// direBonjour("toto");


//déclaration de function
function direBonjour(nom){
    return "bonjour " + nom ;
    
}

// let message = direBonjour("tyty");
// console.log(message);

console.log(direBonjour("tyty"));


//déclaration de function
function direBonjour(nom, prenom){
    return `bonjour ${prenom} ${nom} !`;
    
}

let message = direBonjour("Eisnstein","Albert");
 console.log(message);
