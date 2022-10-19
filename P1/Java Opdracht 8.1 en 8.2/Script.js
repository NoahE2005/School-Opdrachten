function Plus() {
    var field1 = document.getElementById('num1').value;
    var field2 = document.getElementById('num2').value;

    var result = parseFloat(field1) + parseFloat(field2);
    if (!isNaN(result))

    {
        document.getElementById("TextChange").textContent= "Het antwoord is " + result;

    }
}

function Minus() {
    var field1 = document.getElementById('num1').value;
    var field2 = document.getElementById('num2').value;

    var result = parseFloat(field1) - parseFloat(field2);
    if (!isNaN(result))

    {
        document.getElementById("TextChange").textContent= "Het antwoord is " + result;

    }
}

function Multiply() {
    var field1 = document.getElementById('num1').value;
    var field2 = document.getElementById('num2').value;

    var result = parseFloat(field1) * parseFloat(field2);
    if (!isNaN(result))

    {
        document.getElementById("TextChange").textContent= "Het antwoord is " + result;

    }
}

function Divide() {
    var field1 = document.getElementById('num1').value;
    var field2 = document.getElementById('num2').value;

    var result = parseFloat(field1) / parseFloat(field2);
    if (!isNaN(result))

    {
        document.getElementById("TextChange").textContent= "Het antwoord is " + result;

    }
}