alert("Le manège démarre");

let choix = 1;

console.log("Bienvenue dans le manège");
console.log("vous pouvez faire jusqu'a 10 tours de manège");
console.log("pour arreter choisissez 0");

while(choix != 0){
    choix = parseInt(prompt ("choisissez le nombre de tour"));
    console.log(choix);
        switch (choix){
            case 0:
                console.log("revenez quand vous voulez");
                break;
            case 1:
                console.log("C'est le tour numéro 1");
                console.log("vous avez payé pour un ticket, le manège s'arrète, merci de descendre");
                break;
            case 2:
                console.log("C'est le tour numéro 2");
                console.log("vous avez payé pour deux tickets, le manège s'arrète, merci de descendre");
                break;
            case 3:
                console.log("C'est le tour numéro 3");
                console.log("vous avez payé pour trois ticket, le manège s'arrète, merci de descendre");
                break;
            case 4:
                console.log("C'est le tour numéro 4");
                console.log("vous avez payé pour quatre ticket, le manège s'arrète, merci de descendre");
                break;
            case 5:
                console.log("C'est le tour numéro 5");
                console.log("vous avez payé pour cinq ticket, le manège s'arrète, merci de descendre");
                break;
            case 6:
                console.log("C'est le tour numéro 6");
                console.log("vous avez payé pour six ticket, le manège s'arrète, merci de descendre");
                break;
            case 7:
                console.log("C'est le tour numéro 7");
                console.log("vous avez payé pour sept ticket, le manège s'arrète, merci de descendre");
                break;
            case 8:
                console.log("C'est le tour numéro 8");
                console.log("vous avez payé pour huit ticket, le manège s'arrète, merci de descendre");
                break;
            case 9:
                console.log("C'est le tour numéro 9");
                console.log("vous avez payé pour neuf ticket, le manège s'arrète, merci de descendre");
                break;
            case 10:
                console.log("C'est le tour numéro 10");
                console.log("le manège s'arrète");
                break;
        }
    }