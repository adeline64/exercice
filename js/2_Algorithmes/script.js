function log(data) {
console.log(data)
}

function byId(id) {
return document.getElementById(id);
}

function init() {

function add(a, b) {
return parseFloat(a) + parseFloat(b);
}

function sub(a, b) {
return parseFloat(a) - parseFloat(b);
}

function div(a, b) {
return parseFloat(a) / parseFloat(b);
}

function mult(a, b) {
return parseFloat(a) * parseFloat(b);
}

function displayResult() {

getResult(byId('nb1').value, byId('nb2').value, byId('valeur').value);

function getResult(a, b, operateur) {
  if (operateur == '+') { // si +
    var value = add(a,b);
    byId('resultat').innerHTML = value;
  }
  else if (operateur == '-') { // si -
    var value = sub(a,b);
    byId('resultat').innerHTML = value;
  }
  else if (operateur == '/') { // si /
    var value = div(a,b);
    byId('resultat').innerHTML = value;
  }
  else if (operateur == '*') { // si *
    var value = mult(a,b);
    byId('resultat').innerHTML = value;
  }
  else if (isNaN(a) || isNaN(b)) {
    alert('Veuillez entrer des nombres');
  }
}
}

function compute(a, b) {
var nb1 = Number(a); // chiffre a
var nb2 = Number(b); // chiffre b
var operateur = ''; // operateur
}

}