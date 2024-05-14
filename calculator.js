function validateForm() {
    var num1 = document.forms["calculatorForm"]["num1"].value;
    var num2 = document.forms["calculatorForm"]["num2"].value;

    if (num1 == "" || num2 == "") {
        alert("Both numbers are required.");
        return false;
    }
}
