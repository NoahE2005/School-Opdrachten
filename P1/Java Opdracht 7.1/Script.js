function BudgetCheck() {
    var Budget = prompt ("Amount?");
    var MinBudget = 100

    if (Budget > MinBudget) {
        alert(Valid);
        document.getElementById("Text-Budget").style.color = green;
        return True;
    }
    if (Budget < MinBudget) {
        alert(Not_Valid);
        document.getElementById("Text-Budget").style.color = red;
        return False;
    }
}