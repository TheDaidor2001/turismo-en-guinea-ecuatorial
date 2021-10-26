
$(document).ready(function(){

    $('#registro_for').validate({

        rules:{
            nombre: {
                required: true,
                minlength: 4 ,
            },
            contra: {
                required: true,
                minlength: 6,
            },
            correo: {
                required: true,
                email: true
            },
            telefono: {
                required: true,
                number: true,
                minlength: 8,
                maxlength: 11
            }
        },
        messages: {
            nombre: {
                required: "El nombre de usuario es obligatorio",
                minlength: "Es necesario que sean 4 carácteres mínimo"
            },
            contra: {
                required: "La contraseña es obligatoria",
                minlength: "Tiene que tener 6 carácteres mínimos"
            },
            correo: {
                required: "El correo es obligatorio",
                email: "El correo no es válido",
            },
            telefono: {
                required: "El teléfono es obligatorio",
                number: "Solo se aceptan números",
                minlength: "El número debe tener 8 carácteres mínimo",
                maxlength: "El numero tiene que tener máximo de 11 carácteres"

            }
        }
    });

});

/**Validacion de los check box */
$('#check').change(function() {
    if($(this).is(":checked")) {
        document.getElementById("nueva_nueva").disabled=false;
        document.getElementById("nueva_nueva").required=true;

    }else{
        document.getElementById("nueva_nueva").disabled=true;
        document.getElementById("nueva_nueva").value="";
        document.getElementById("nueva_nueva").required=false;
    }
});

$('#check-eli').change(function(){
    if($(this).is(":checked")){
        document.getElementById("block-uno").disabled=false;
        document.getElementById("block-dos").disabled=false;
    }else{
        document.getElementById("block-uno").disabled=true;
        document.getElementById("block-dos").disabled=true;
        document.getElementById("block-uno").value="";
        document.getElementById("block-dos").value="";

    }

});



/**Codigo para actualizar datos */
$('#actu').click(function(){
    var recolec = $('#cambiar').serialize();

    $.ajax({
        url: 'php/actualizar.php',
        type: 'POST',
        data: recolec,

        success:function(vs){
            if(vs == "1"){
                alertify.success("Los datos se modificaron con éxito");
                $('#tabla_user').load('../usuario.php #tabla_user');
                $('#mod-per').modal('hide');
            }else if(vs == 2){
                alertify.success("Los datos y la contraseña se modificaron con éxito");
                $('#tabla_user').load('../usuario.php #tabla_user');
                $('#mod-per').modal('hide');
            }else{
                alertify.error("La contraseña no es correcta");
            }
            
        }

    })

});

/**Codigo para reservar hotel */
