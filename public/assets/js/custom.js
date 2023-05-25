function logoutFunction() {
    // Get the form element
    var form = document.getElementById("logoutForm");

    // Submit the form
    form.submit();
}

function copyClipBoard() {
    var copyText = document.getElementById("referInput");
    copyText.select();
    document.execCommand("copy");
}