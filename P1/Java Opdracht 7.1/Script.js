var getal = 0

function BudgetCheck72() {
    var Budget = prompt ("Amount?");
    var MinBudget = 100;

    if (Budget>MinBudget) {
        document.getElementById("Text-Budget").style.color = "green";
        document.getElementById("Text-Budget"). textContent  = "Meer dan 100";
    }
    else {
        document.getElementById("Text-Budget").style.color = "red";
        document.getElementById("Text-Budget"). textContent  = "Minder dan 100";
    }
}
function Tekst73() {
    document.getElementById("7.3Id"). textContent = getal++;
    if(getal>10) 
    {
        getal = 0
    }
}

function BudgetCheck71() {
    var Budget2 = 3;
    var MinBudget2 = 100;

    if (Budget2>MinBudget2) {
        document.getElementById("Text-Budget2").style.color = "green";
        document.getElementById("Text-Budget2"). textContent  = "Meer dan 100";
    }
    else {
        document.getElementById("Text-Budget2").style.color = "red";
        document.getElementById("Text-Budget2"). textContent  = "Minder dan 100";
    }
}