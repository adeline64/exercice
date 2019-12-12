class Voiture {

    // ce qui caractérise la voiture
    constructor(marq,coul,boiteVit,mod) {
        this.marque = marq;
        this.couleur = coul;
        this.boiteVitesse = boiteVit;
        this.modele = mod;
    }

    // ce que sait faire la voiture
    Klaxonner(){
        console.log("Ihn Ihn; tut, tut");
    }

    rouler(){
        console.log("is alive");
    }

    tourner(){
        console.log("hiiiiiiiiiii");
    }
}