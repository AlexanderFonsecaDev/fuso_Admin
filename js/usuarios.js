$("#crearUsuario").click(function () {
    swal({
        title: '<h2>Informacion del usuario</h2>',
        type: 'info',
        html:
        'You can use <b>bold text</b>, ' +
        '<a href="//github.com">links</a> ' +
        'and other HTML tags',
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText:
            '<i class="fa fa-thumbs-up"></i> Great!',
        cancelButtonText:
            '<i class="fa fa-thumbs-down"></i>'
    })
});
