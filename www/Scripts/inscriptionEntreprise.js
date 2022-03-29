$(document).ready(function(){
$("#confiance").on("input", function () {
    var confiance = $("#confiance").val();
    $("#confianceLabel").text('Indice de confiance : ' + confiance*10 + '%');
});

$("#postalCode").on("input", function () {
    var postalCode = $("#postalCode");
    if(postalCode.val().match(/^[0-9]+$/) && postalCode.val().length == 5) {
        postalCode.css("border-color", "green");
        postalCode.css("background-color", "darkseagreen");
    }
    else {
        postalCode.css("border-color", "red");
        postalCode.css("background-color", "lightcoral");

    }
});
});