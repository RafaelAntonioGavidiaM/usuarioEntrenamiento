// Rafael---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$(document).ready(function (opcion, id, principal) {

    cargarRol(1)
     
    function cargarRol(){

        var cargarRoles = "ok";
        var objDataRoles =  new FormData();
        objDataRoles.append("cargarRoles",cargarRoles);

        
        $.ajax({


            url: "control/usuariosControl.php",
            type: "post",
            dataType: "json",
            data: objDataRoles,
            cache: false,
            contentType: false,
            processData: false,
            success: function (respuesta) {

                if(opcion = 1){

                    $("#selectUsuario").html("");
                    
                    respuesta.forEach(listarRoles);
                    function listarRoles(item, index){

                        $("#selectUsuario").append('<option value="' + item.idRol  + '">' + item.descripcion + ' </option>')

                    }
                }else if(opcion = 2){

                    $("#selectModUsuario").html();


                }




            }

        })

    }



    // Registrar

    $("#btnRegistrar").click(function () {


        var nombre = $("#txtNombre").val();
        var apellido = $("#txtApellido").val()
        var email = $("#txtEmail").val();
        var contraseña = $("#txtContraseña").val();
        var idRol = $("#selectUsuario").val();

        var objData = new FormData();
        objData.append("nombre", nombre);
        objData.append("apellido", apellido);
        objData.append("email", email);
        objData.append("contraseña", contraseña);
        objData.append("idRol", idRol);
    


        $.ajax({


            url: "control/usuariosControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (respuesta) {

                if (respuesta = "ok") {

                    swal.fire({

                        position: 'top-end',
                        icon: 'success',
                        title: 'Registro Exitoso',
                        showConfirmButton: false,
                        timer: 1500,
                    })
                }
            }
        })
    })








































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































 // Diego---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



























































































































































































































































































































































































































































































































































































































































































































 // Edisson---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

})