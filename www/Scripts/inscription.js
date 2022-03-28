$(document).ready(function(){
    $("#passwordConfirmation").on("input", function(){
        let password = $("#password");
        let passwordConfirmation = $("#passwordConfirmation");
        if(password.val() != passwordConfirmation.val()) {
            passwordConfirmation.css("border-color", "red");
            passwordConfirmation.css("background-color", "lightcoral");
            password.css("border-color", "red");
            password.css("background-color", "lightcoral");


        }
            else {
            passwordConfirmation.css("border-color", "green");
            passwordConfirmation.css("background-color", "darkseagreen");

            password.css("border-color", "green");
            password.css("background-color", "darkseagreen");

        }
    });
    $("#login").on("input", function(){
        let email = $("#login");
        let regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
        if(!regex.test(email.val())) {
            email.css("border-color", "red");
            email.css("background-color", "lightcoral");
        }
        else {
            email.css("border-color", "green");
            email.css("background-color", "darkseagreen");
        }
    });
    $("#role").on("change", function(){
        if($("#role :selected").text() == "Etudiant" || $("#role :selected").text() == "Delegue") {
            $("#promotion").css("display", "block");
            $("#promotionLabel").css("display", "block");
        }
        else {
            $("#promotion").css("display", "none");
            $("#promotionLabel").css("display", "none");
        }
    });

    });