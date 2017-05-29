$("#crearUsuario").click(function () {
    swal({
        title: '<h2>Informacion del usuario</h2>',
        type: 'info',
        html:
        '<form id="formulario">'+
        '<label>Nombre</label>'+
        '<input id="nombre" class="swal2-input">' +
        '<label>Apellido</label>'+
        '<input id="apellido" class="swal2-input">' +
        '<label>Genero</label>'+
        '<select name="genero" id="genero" class="swal2-select">' +
        '<option value="M" class="swal2-">Hombre</option>' +
        '<option value="F">Mujer</option>' +
        '</select>' +
        '<br>' +
        '<label>Telefono</label>'+
        '<input id="telefono" class="swal2-input">' +
        '<label>Correo</label>'+
        '<input id="correo" type="email" class="swal2-input">' +
        '<label>Fecha de nacimiento</label>'+
        '<input id="fecha" type="date" class="swal2-input">' +
        '<label>Pais</label>'+
        '<input id="cambio_pais" type="text" class="swal2-input">'+
        '<label>Ciudad</label>'+
        '<input id="ciudad" type="text" class="swal2-input">'+
        '</form>',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Cambiar',
        showLoaderOnConfirm: true,
        preConfirm: function () {
            return new Promise(function (resolve) {
                var nombre = $('#nombre').val();
                var apellido = $('#apellido').val();
                var telefono = $('#telefono').val();
                var correo = $('#correo').val();
                var usuario =$('#usuario_nuevo').val();
                var pass = $('#password_nuevo').val();
                var fecha = $('#fecha').val();
                var pais = $('#cambio_pais').val();
                var ciudad = $('#ciudad').val();
                var genero = $('#genero option:selected' ).text();;

                $.ajax({
                    url:'php/ajax/crearUsuario.php',
                    type:'post',
                    dataType:'json',
                    data:{'nombre':nombre, 'apellido' : apellido , 'telefono' : telefono ,
                        'correo': correo , 'usuario' : usuario ,'pass':pass,'fecha':fecha,
                        'pais':pais,'ciudad':ciudad,'genero':genero},
                    beforeSend:function () {
                        swal('Enviando peticion')
                    }
                })
                    .done(function () {
                        swal(
                            'Good job!',
                            'Registro Exitoso!',
                            'success'
                        )
                        setTimeout(function () {
                            location.reload();
                        },1000);

                    })
                    .fail(function () {
                        swal(
                            'Ocurrio un problema!',
                            'Ocurrio un problema al crear el usuario ',
                            'error'
                        )
                    })
            })
        },
        allowOutsideClick: false,
        customClass: 'animated rubberBand'
    });

});
