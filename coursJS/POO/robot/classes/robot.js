class Robot {
    constructor(br,jamb,yeu,orei,bou,tet,cor,ant,no) {
        this.bras = br;
        this.jambes = jamb;
        this.yeux = yeu;
        this.oreille = orei;
        this.bouche = bou;
        this.tete=tet;
        this.corp=cor;
        this.antenne=ant;
        this.nom=no;
    }

    // ce que sait faire le robot
    sauter(){
        console.log("boing, boing");
    }

    marcher(){
        console.log("un, deux, un, deux");
    }

    reculer(){
        console.log("on recuuuuuuuule");
    }

    monter(){
        console.log("oh hisse");
    }

    parlerReussite(){
        console.log("oh ouais");
    }

    parlerRater(){
        console.log("noooooooooon !!!");
    }

    tomber(){
        console.log("on descend !!!");
    }

    demitour(){
        console.log("on fait demi-tour !!!");
    }
}