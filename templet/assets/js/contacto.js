$(document).ready(function () {


    /* var anch = screen.width;

    if (anch< 700) {console.log(typeof +anch);
        
        $('#deslizar').append("Desliza hacia la Izquierda");
        $('#deslizar').append('<br><span class="fa fa-angle-down"></span>');
    }
        

    $(window).resize(function(){       
        var ancho=$(window).width();
        $('#deslizar').empty();       
        if (ancho<700) {
            $('#deslizar').append("Desliza hacia la Izquierda");
        $('#deslizar').append('<br><span class="fa fa-angle-down"></span>');
        }
            
        if (ancho>800) 
        {$('#deslizar').empty();}
            
        
                console.log("desde funcion contacto");
        }) */

alert("Que onda");
        
$('#enviar').click(function () {    
    var nombre = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;
    var telefono = document.getElementById('tel').value;
    var mensaje = document.getElementById('mensaje').value;

    var ruta = "&nombre="+nombre+"&email="+email+"&telefono="+telefono+"&mensaje="
+mensaje;


if (nombre!=""  && email!="" && mensaje!="" && telefono!="") {
    console.log("Si, "+ nombre+" HAY ALGO");
    $("#enviar").html("Mensaje Enviado");
    $("#enviar").css({"background-color": "#ed5434","border-radius":"5px","border":"#ed5434" ,"color":"#fff", "font-size": "90%"});

    $.ajax({
        url:location.origin + '/app/controlador/correo-comsis.php',
         type:'POST',
         data:ruta,
     })
     .done(function (res) {
         $("#respuesta").html(res)
     })
    
}else{
    $("#respuesta").html("Por favor completa los campos");
}


});/* cierre de funcion enviar*/ 



});/**Cierre de funcion ready */