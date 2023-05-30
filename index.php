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
                            <div class="d-flex justify-content-around flex-wrap">
                                <div class="d-grid div-form">
                                    <label for="invoiceNumber">Nro de Factura:</label>
                                    <input class="e-form" type="text" id="invoiceNumber" name="invoiceNumber"><br>
                                </div>
                                <div class="d-grid div-form">
                                    <label for="invoiceDate">Fecha de Factura:</label>
                                    <input class="e-form" type="date" id="invoiceDate" name="invoiceDate"><br>
                                </div>
                                <div class="d-grid div-form">
                                    <label for="sellerName">Vendedor:</label>
                                    <input class="e-form" type="text" id="sellerName" name="sellerName"><br>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center flex-wrap">
                                <div class="d-grid div-form">
                                    <label for="customerId">Nro ID del cliente:</label>
                                    <input class="e-form" type="text" id="customerId" name="customerId"><br>
                                </div>
                                <div class="d-grid div-form">
                                    <label for="customerName">Nombres y apellidos:</label>
                                    <input class="e-form" type="text" id="customerName" name="customerName"><br>
                                </div>
                                <div class="d-grid div-form">
                                    <label for="customerEmail">Correo Electronico:</label>
                                    <input class="e-form" type="text" id="customerEmail" name="customerEmail"><br>
                                </div>
                                <div class="d-grid div-form">
                                    <label for="customerAddress">Direccion:</label>
                                    <input class="e-form" type="text" id="customerAddress" name="customerAddress"><br>
                                </div>
                                <div class="d-grid div-form">
                                    <label for="customerTel">Telefono de Contacto:</label>
                                    <input class="e-form" type="text" id="customerTel" name="customerTel"><br>
                                </div>
                            </div>




                            <!-- Otros campos del encabezado de factura -->
                            <div class="d-flex justify-content-between">
                                <button class="boton btn btn-light" type="button" onclick="generarCodigo()">Generar codigo de Factura</button>

                                <button class="boton btn btn-warning" type="button" id="addHeader" onclick="submitForm()">Guardar Encabezado</button>
                            </div>

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
                    <button class="boton btn btn-warning" type="button"
                    id="saveItem" onclick="submitForm()">Guardar Factura</button>
                </div>

                <div id="result">

                </div>
            </div>
        </div>
    </div>

    </div>


</body>

</html>