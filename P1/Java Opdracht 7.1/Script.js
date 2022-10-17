var getal = 0

function BudgetCheck() {
    var Budget = prompt ("Amount?");
    var MinBudget = 100;

    if (Budget>MinBudget) {
        alert(Valid);
        document.getElementById("Text-Budget").style.color = "green";
    }
    else {
        alert(Not_Valid);
        document.getElementById("Text-Budget").style.color = "red";
    }
    alert("Sucess")
}
function Tekst73() {
    document.getElementById("7.3Id"). textContent = getal++;
    if(getal>10) 
    {
        getal = 0
    }
}