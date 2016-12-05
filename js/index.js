$(document).ready(function () {
//    alert("Hola");
});

//$("#frminicio").submit(function (evento) {
//    evento.preventDefault();
//
//    //alert( $("#txtEmail").val()+" "+$("#txtPassword").val());
//
//    $.post("https://comercial2016.herokuapp.com/api/v1/usuario", {
//        email: $("#txtEmail").val(),
//        password: $("#txtPassword").val()
//    }).done(function (resultado) {
//        var datosJSON = resultado;
//
//        alert(resultado[0].usuario)
//
//        document.location = "principal.vista.html";
//
//
////    for (var i = 0; i < datosJSON.length; i++) {
////      if(datosJSON[i].estado === 200){
////        document.location= "principal.vista.html?dato="+ datosJSON[i].dato;
////      }else{
////        alert(datosJSON[i].dato);
////      }
////    }
//    }).fail(function (error) {
//        var datosJSON = $.parseJSON(error.responseText);
//        alert(datosJSON.mensaje);
//    });
//});

$("#frminicio").submit(function (evento) {
    evento.preventDefault();
//    alert($("#txtEmail").val() + " " + $("#txtPassword").val());
    $.post("https://comercial2016.herokuapp.com/api/v1/usuario", {
        email: $("#email").val(),
        password: $("#password").val()
    }).done(function (resultado) {
        var datosJSON = resultado;
//        document.location = "principal.vista.html";

        for (var i = 0; i < datosJSON.length; i++) {
            if (datosJSON[i].estado === 200) {
                document.location = "principal.vista.php?dato=" + datosJSON[i].dato;
            } else {
                alert(datosJSON[i].dato);
                $("#email").val("");
            }
        }
    }).fail(function (error) {
        var datosJSON = $.parseJSON(error.responseText);
        alert(datosJSON.mensaje);
    });
});