const val = 0;

const apprecierEspece1 = document.getElementById('apprecierEspece1');
const apprecierEspece2 = document.getElementById('apprecierEspece2');
const apprecierEspece3 = document.getElementById('apprecierEspece3');



apprecierEspece1.addEventListener('click', () => {
    
    console.log(newFunction());

});

apprecierEspece2.addEventListener('click', () => {
    
    console.log(newFunction());

});

apprecierEspece3.addEventListener('click', () => {
    
    console.log(newFunction());

});

function newFunction() {
    return val + 1;
}