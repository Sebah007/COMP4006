function validateForm() {
    var text = document.forms["wordCounterForm"]["text"].value;

    if (text == "") {
        alert("Please enter some text.");
        return false;
    }
}
