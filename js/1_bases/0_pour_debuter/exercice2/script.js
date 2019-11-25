  // Table de multiplication

// Faites varier cette variable entre 1 et 10


const nombre = Number(prompt("quelle table de multiplication voulez vous afficher ?")); 
        
        
        while (isNaN (nombre)) { 
            alert("veuillez rentrer un nombre");
            
        }
        
       

console.log(`Table de multiplication de ${nombre}`);
document.write(`Table de multiplication de ${nombre}` + "<br>");

// Solution avec un for
for (let i = 1; i <= 10; i++) {
  console.log(`${nombre} x ${i} = ${nombre * i}`);
  document.write(`${nombre} x ${i} = ${nombre * i}` + "<br>");
}

// Solution alternative avec un while
/* let i = 1;
while (i <= 10) {
  console.log(`${nombre} x ${i} = ${nombre * i}`);
  i++;
} */