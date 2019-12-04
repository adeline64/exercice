  // Table de multiplication

// Faites varier cette variable entre 1 et 10


do {
  nombre = prompt("quelle table de multiplication voulez vous afficher ?"); 
  if (isNaN(nombre)) {
      if (nombre.toLowerCase() == "s") {
          alert("Sortie :)");
      } else {
          alert("merci de mettre un nombre");
      }
  } else {
      console.log("c'est un nombre")
      console.log("Nombre prompté", nombre, typeof(nombre));
      console.log("Table de multiplication de "+nombre);
      document.write("Table de multiplication de "+nombre+"<br>");

      //Solution avec un for
      for (let i = 1; i <= 10; i++) {
          console.log(nombre+" x "+i+" = "+(nombre * i));
          document.write(nombre+" x "+i+" = "+(nombre * i)+"<br>");
      }
  }
} while (nombre.toLowerCase() != "s");


                          

// Solution alternative avec un while
/* let i = 1;
while (i <= 10) {
  console.log(`${nombre} x ${i} = ${nombre * i}`);
  i++;
} */