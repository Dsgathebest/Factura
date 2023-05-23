<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/procesarfactura.js" defer></script>
    <title>Registro de Factura</title>
</head>
    <body>
        <div id="registro">
            <h1>Registro de Factura</h1>

            <h2>Encabezado de Factura</h2>
                <form id="headerForm">
                    <label for="invoiceNumber">Número de Factura:</label>
                    <input type="text" id="invoiceNumber" name="invoiceNumber"><br>

                    <label for="customerName">Nombre del Cliente:</label>
                    <input type="text" id="customerName" name="customerName"><br>

                    <!-- Otros campos del encabezado de factura -->
                    
                    <button type="button" id="addHeader">Agregar Encabezado</button>
                    </form>

                    <h2>Detalle de Factura</h2>
                    <form id="detailForm">
                    <label for="productName">Nombre del Producto:</label>
                    <input type="text" id="productName" name="productName">

                    <label for="quantity">Cantidad:</label>
                    <input type="number" id="quantity" name="quantity">

                    <!-- Otros campos del detalle de factura -->
                    
                    <button type="button" id="addItem">Agregar Detalle</button>
                </form>

            <button type="button" onclick="submitForm()">Guardar Factura</button>

            <div id="result">

            </div>
        </div>
        
        
    </body>
</html>
