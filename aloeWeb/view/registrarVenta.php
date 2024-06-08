<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 550px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #c2c2c2;
            height: 100%;
        }

        .container-fluid {
            background-color: #BFF7DC;
        }

        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
            .row.content {
                height: auto;
            }
        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:focus,
        .nav-pills>li.active>a:hover {
            background-color: #808080;
            /* Color de fondo gris */
            color: white;
            /* Color del texto */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse visible-xs">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Aloe</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="?c=ventas&a=registrarVenta">Registrar venta</a></li>
                    <li><a href="#">Ver ventas</a></li>
                    <li><a href="#">Registrar precio</a></li>
                    <li><a href="#">Ver lista de precios</a></li>
                    <li><a href="#">Registrar cliente</a></li>
                    <li><a href="#">Ver clientes</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
                <h2>Aloe</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="?c=ventas&a=registrarVenta">Registrar ventas</a></li>
                    <li><a href="?c=ventas&a=verVenta">Ver ventas</a></li>
                    <li><a href="?c=precios&a=registrarPrecio">Registrar precio</a></li>
                    <li><a href="?c=precios&a=listarPrecio">Ver lista de precios</a></li>
                    <li><a href="#section3">Registrar cliente</a></li>
                    <li><a href="#section3">Ver clientes</a></li>
                </ul><br>
            </div>
            <br>
            <br>
            <!-- AQUI VA EL CONTAINER -->
            <form action="?c=ventas&a=guardarVenta" method="post">
                    <label for="exampleInputEmail1">Cliente</label>
                    <input name="cliente" type="text" id="Cliente" placeholder="Cliente">

                    <label for="exampleInputEmail1">Fecha</label>
                    <input name="fecha" type="date" id="Fecha" placeholder="Fecha">
<br>
                    <label for="exampleInputEmail1">Producto</label>
                    <input name="producto" type="text" id="Producto" placeholder="Producto">

                    <label for="exampleInputEmail1">Direccion</label>
                    <input name="direccion" type="text" id="Direccion" placeholder="Direccion">

                    <button type="submit" class="btn btn-default">Registrar</button>
            </form>
            <!-- AQUI VA EL CONTAINER -->
        </div>
    </div>
    </div>
</body>

</html>