<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="js/procesarfactura.js" defer></script>
    <script src="/js/registro/cliente.js" defer></script>
    <title>Registro de Factura</title>
</head>

<body>
    <!-- Encabezado -->
    <div id="registro" class="">
        <div class="header row ">
            <div class="col-3 d-flex justify-content-center">
                <img class="iFactura" src="/imagenes/factura.png" alt="">
            </div>
            <div class="col-6 d-flex justify-content-center align-item-center">
                <div class="">
                    <h1>Registro de Factura</h1>
                </div>
            </div>
            <div class="col-3"></div>

        </div>
        <!-- Main -->
        <div class="container">
            <div class="card m-4">
                <div class="card-body">
                    <div class="card-header">
                        <h2>Encabezado de Factura</h2>
                    </div>
                    <div class="card-form">
                        <form id="headerForm">
                            <div class="d-flex div-form">
                                <label for="invoiceNumber">Número de Factura:</label>
                                <input class="e-form" type="text" id="invoiceNumber" name="invoiceNumber"><br>
                                <button class="e-form btn btn-light" type="button" id="addCode">Generar codigo de Factura</button>
                            </div>
                            <div class="div-form">
                                <label for="customerName">Nombre del Cliente:</label>
                                <input class="e-form" type="text" id="customerName" name="customerName"><br>
                            </div>
                            <!-- Otros campos del encabezado de factura -->

                            <button class="boton btn btn-warning" type="button" id="addHeader" onclick="generarCodigo()">Guardar Encabezado</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card m-4">
                <div class="card-body">
                    <div class="card-header">
                        <h2>Detalle de Factura</h2>
                    </div>
                    <div class="card-form div-scroll">
                        <form id="detailForm">
                            
                            <!-- Otros campos del detalle de factura -->

                            <div id="newItem">

                            </div>
                        </form>
                    </div>

                    <div>
                        <button class="boton btn btn-warning" id="addItem" type="button">Agregar Producto</button>
                    </div>
                    <button class="boton btn btn-warning" type="button" onclick="submitForm()">Guardar Factura</button>
                </div>

                <div id="result">

                </div>
            </div>
        </div>
    </div>

    </div>


</body>

</html>