<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <!-- Por Defecto -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <link rel='stylesheet' type='text/css' media='screen' href='https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css'>
    <!--animated -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Botones Exportacion-->
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.jqueryui.min.js"></script>


    <link rel='stylesheet' type='text/css' media='screen' href='https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='https://cdn.datatables.net/colreorder/1.5.4/css/colReorder.dataTables.min.css'>

    <!--  sweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='vista/css/usuarios.css'>
    <script src='vista/js/usuarios.js'></script>
</head>

<body>
    <div class="col-sm-12">
        <div class="jumbotron">
            <h1 class="titulo text-center">Usuarios Practica</h1>
        </div>
        <div class="col-lg-5">
            <form class="container">
                <div class="form-group">
                    <input type="text" class="input" id="txtNombre" placeholder=" ">
                    <label for="txtNombre" class="label">Nombre:</label>
                    <span class="line"></span>
                </div>
                <div class="form-group">
                    <input type="text" class="input" id="txtApellido" placeholder=" ">
                    <label for="txtApellido" class="label">Apellido:</label>
                    <span class="line"></span>
                </div>
                <div class="form-group">
                    <input type="text" class="input" id="txtEmail" placeholder=" ">
                    <label for="txtEmail" class="label">Email:</label>
                    <span class="line"></span>
                </div>
                <div class="form-group">
                    <input type="text" class="input" id="txtContraseña" placeholder=" ">
                    <label for="txtContraseña" class="label">Contraseña:</label>
                    <span class="line"></span>
                </div>
                <div class="form-group">
                    <select id="selectUsuario" class="form-select form-select-lg mb-3 input" aria-label=".form-select-lg example">
                        <option selected place>Seleccionar Rol:</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary" id="btnRegistrar">Registrar</button>
                <button type="button" class="btn btn-primary" id="btnModificar">Modificar</button>
            </form>
        </div>
        <div class="col-lg-7">
            <table id="tablaUsuario" style="width:100%" class="table row-border stripe display nowrap hover display compact order-column">
                <thead class="cabeceraTabla">

                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="bodyUsuario">

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>