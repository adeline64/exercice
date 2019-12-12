console.log("event");

let boutonClick = document.getElementById("bouttonClick");
let inputTest = document.getElementById("inputTest");

console.log(boutonClick);

// boutonClick.addEventListener('click',alerter);

// function alerter() {
//     alert("ok");
// }

boutonClick.addEventListener('click',(event)=>{
    console.log(event);
    alert("ok");
});

inputTest.addEventListener('keyup',(e)=>{
    console.log(e.target.value);
});

document.body.addEventListener('mousemove',(e)=>{
    console.log("X = ",e.clientX,"Y = ",e.clientY);
});