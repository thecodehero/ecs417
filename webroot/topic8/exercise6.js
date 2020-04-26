function passwordSame() 
{
    var x = document.getElementById("newPassword");
    var y = document.getElementById("confirmPassword");
    if(x.value===y.value) {
        document.getElementById("registrationForm").submit();
    }
    else {
        window.alert("Alert. Password and Confirm Password must be the same.")
    }
}