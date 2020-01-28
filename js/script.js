// Form validation code will come here.
function validate() {

    if (document.myForm.User.value == "") {
        alert("Please provide your Name");
        document.myForm.User.focus();
        return false;
    }
    if (document.myForm.Email.value == "") {
        alert("Please provide your Email");
        document.myForm.Email.focus();
        return false;
    }
    if (document.myForm.Mobile.value == "") {
        alert("Please provide your Mobile");
        document.myForm.Mobile.focus();
        return false;
    }
    if (document.myForm.Mobile.value.length != 10) {
        alert("Mobile Number needs to be 10 digits");
        document.myForm.Mobile.focus();
        return false;
    }
    if (document.myForm.Comments.value == "") {
        alert("Please provide Comments");
        document.myForm.Comments.focus();
        return false;
    } else {
        alert("Your Comments have been entered");
    }
    return (true);
}


// function validate_login() {

//     if (document.myForm.user.value == "") {
//         alert("Please provide your User Name");
//         document.myForm.user.focus();
//         return false;
//     }
//     if (document.myForm.password.value == "") {
//         alert("Please provide your Password");
//         document.myForm.password.focus();
//         return false;
//     }
//     if (document.myForm.user.value == "Afroz Chakure" && document.myForm.password.value == "afroz") {
//         alert("Successfull Login");
//         window.open("index.php");
//     } else {
//         alert("Enter Correct User and Password !!");
//     }
//     return (true);
// }