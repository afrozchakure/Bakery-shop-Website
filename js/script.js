// Form validation code will come here.
function validate() {

    if (document.myForm.user.value == "") {
        alert("Please provide your Name");
        document.myForm.user.focus();
        return false;
    }
    if (document.myForm.email.value == "") {
        alert("Please provide your Email");
        document.myForm.email.focus();
        return false;
    }
    if (document.myForm.mobile.value == "") {
        alert("Please provide your Mobile");
        document.myForm.mobile.focus();
        return false;
    }
    if (document.myForm.comments.value == "") {
        alert("Please provide Comments");
        document.myForm.comments.focus();
        return false;
    } else {
        alert("Your Comments have been entered");
    }
    return (true);
}


function validate_login() {

    if (document.myForm.user.value == "") {
        alert("Please provide your User Name");
        document.myForm.user.focus();
        return false;
    }
    if (document.myForm.password.value == "") {
        alert("Please provide your Password");
        document.myForm.password.focus();
        return false;
    }
    if (document.myForm.user.value == "Afroz Chakure" && document.myForm.password.value == "afroz") {
        alert("Successfull Login");
        window.open("index.php");
    } else {
        alert("Enter Correct User and Password !!");
    }
    return (true);
}