$(document).ready(function(){
    $("#fullName").keyup(function(){
        var fullName = $("#fullName").val();
        var c_fullName = /^[a-z ]{3,}$/i;
        var r_fullName = c_fullName.test(fullName)
        if (!r_fullName) {
            $("#f_error").text("Enter a valid Name");
        } else {
            $("#f_error").text("");

        }
    })
})