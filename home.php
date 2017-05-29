<div class="size1">
    <h2 class="h2">Bienvenido, </h2>
</div>
<div class="module05 size1">
    <div class="inner_module">
        <div class="date1"></div>
        <div id="clock"></div>
    </div>
</div>
<div class="module1 size2">
    <div class="inner_module">
        <div class="icon_cr" style="background: #F44336;">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        </div>
        <div class="text_cr"><span>1</span> Clases</div>
    </div>
</div>
<div class="module1 size2">
    <div class="inner_module">
        <div class="icon_cr" style="background: #FF9800;">
            <i class="fa fa-book" aria-hidden="true"></i>
        </div>
        <div class="text_cr"><span>20</span> Módulos</div>
    </div>
</div>
<div class="module1 size2">
    <div class="inner_module">
        <div class="icon_cr" style="background: #33b86c;">
            <i class="fa fa-pencil" aria-hidden="true"></i>
        </div>
        <div class="text_cr"><span>200</span> Lecciones</div>
    </div>
</div>
<div class="module1 size2">
    <div class="inner_module">
        <div class="icon_cr" style="background: #00BCD4;">
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <div class="text_cr"><span>1250</span> Usuarios</div>
    </div>
</div>
<div class="module2 size3">
    <div class="inner_module">
        <div class="head_module">Nuevo Módulo</div>
        <div class="content_module">
            <input type="text" placeholder="Titulo">
            <div class="subtitle_module">Color</div>
            <div class="colors">
                <div class="colors_box">
                    <div class="inner_color" style="background: #418bca;"></div>
                </div>
                <div class="colors_box">
                    <div class="inner_color" style="background: #f44336;"></div>
                </div>
                <div class="colors_box">
                    <div class="inner_color" style="background: #ff9800;"></div>
                </div>
                <div class="colors_box">
                    <div class="inner_color" style="background: #33b86c;"></div>
                </div>
                <div class="colors_box">
                    <div class="inner_color" style="background: #00bcd4;"></div>
                </div>
            </div>
        </div>
        <div class="button_module transition05">Crear</div>
    </div>
</div>
<div class="module2 size3">
    <div class="inner_module">
        <div class="head_module">Nueva Lección</div>
        <div class="content_module">
            <input type="text" placeholder="Titulo">
            <div class="subtitle_module">Icono</div>
            <input type="file">
        </div>
        <div class="button_module transition05">Crear</div>
    </div>
</div>
<div class="module2 size3">
    <div class="inner_module">
        <div class="head_module">Nuevo Usuario</div>
        <div class="content_module">
            <input type="text" placeholder="Usuario">
            <input type="password" placeholder="Contraseña">
            <select name="type_user" id="type_user">
                <option value="1">Estudiante</option>
                <option value="2">Editor</option>
            </select>
        </div>
        <div class="button_module transition05"><span id="crearUsuario">Crear</span></div>
    </div>
</div>
<div class="module2 size1">
    <div class="inner_module">
        <div class="graph">
            <div id="bar" style="height: 100%; " class="morris-chart"></div>
        </div>
    </div>
</div>

<script src="js/usuarios.js"></script>
<script>
    /************Date Clock *******************/
    function clock() {
        var today = new Date();
        var year = today.getFullYear();
        var days = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
        var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', ' Julio ', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        var day = today.getDate()
        var dayweek = days[today.getDay()];
        var month = months[today.getMonth()];
        $(".date1").html(dayweek + " " + day + " de " + month + " " + year);
        var hours = today.getHours();
        var minutes = today.getMinutes();
        var seconds = today.getSeconds();
        if (hours >= 12) {
            meridiem = " PM";
        } else {
            meridiem = " AM";
        }
        if (hours > 12) {
            hours = hours - 12;
        } else if (hours === 0) {
            hours = 12;
        }
        if (minutes < 10) {
            minutes = "0" + minutes;
        } else {
            minutes = minutes;
        }
        if (seconds < 10) {
            seconds = "0" + seconds;
        } else {
            seconds = seconds;
        }
        document.getElementById("clock").innerHTML = ("<i class='fa fa-clock-o'></i>  " + hours + ":" + minutes + ":" + seconds + meridiem);
    }
    setInterval('clock()', 1000);


    setTimeout(function () {
        // Morris bar chart

        Morris.Bar({
            element: 'bar',
            data: [
                {y: 'Monday', a: 75, b: 65},
                {y: 'Tuesday', a: 50, b: 40},
                {y: 'Wednesday', a: 75, b: 65},
                {y: 'Thursday', a: 100, b: 90},
                {y: 'Friday', a: 100, b: 90},
                {y: 'Saturday', a: 100, b: 90},
                {y: 'Sunday', a: 100, b: 90}
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Ins', 'Outs'],
            barColors: ['#418bca', '#f44336'],
            hideHover: true
        });
    }, 2000);
</script>