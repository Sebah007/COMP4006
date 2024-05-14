function validateForm() {
    var text = document.forms["stringCounterForm"]["text"].value;

    if (text == "") {
        alert("Please enter some text.");
        return false;
    }
}
