import { MongoClient } from 'mongodb';

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







// Edition d'un titre

const titreCardInput = document.getElementById("TitreDeLHabitatMiseAJourInput");

const titreDesMarais = document.getElementById("titreDesMarais");

// const btnEditCardDesMarais = document.getElementById(btnEditCardDesMarais);

const btnEditIcn = document.getElementById("btnEditIcn");

btnEditIcn.onclick = editTitreCard();

function editTitreCard() {

    function recuperationDesEntrees() {
        const btnEditCardDesMarais = document.getElementById(btnEditCardDesMarais);
        // console.log("okClick");
        
        //nous attendons la résolution de la fonction asynchrone maFonctionRetournantUnePromesse()
      }

    // const btnEditCardDesMarais = document.getElementById(btnEditCardDesMarais);
    // console.log("ok");
    //return input.value;
}


function myFunction() {
  document.getElementById("titreDesMarais").innerHTML = titreCardInput.value;
}
