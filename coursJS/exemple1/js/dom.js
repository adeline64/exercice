console.log("dom");

let main = document.createElement('main');

//main.innerHTML = "toto";

//document.body.appendChild(main);

let section = document.createElement('secontion');
main.appendChild(section);

let h1 = document.querySelector('h1');
h1.after(main);


console.log(main);
console.dir(main);