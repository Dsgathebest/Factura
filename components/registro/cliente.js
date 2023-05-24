const btnGenerarCodigo = document.querySelector("#addCode");
btnGenerarCodigo.addEventListener("click", generarCodigo);

const newItem = document.querySelector("#newItem");
const addItem = document.querySelector("#addItem");
addItem.addEventListener("click", agregarProducto);

let codigoSecuencial = 1;
let idSecuencial = 1;

function generarCodigo() {
    let input = document.querySelector("#invoiceNumber");
    let codigo = generarCodigoUnico();
    input.value = codigo
}

function generarCodigoUnico() {
    let codigo = "No." + codigoSecuencial.toString().padStart(6, "0");
    codigoSecuencial++;
    return codigo;
}

function agregarProducto() {
    console.log(idSecuencial);
    newItem.innerHTML = "";

    let divNewItem = document.createElement("div");
    divNewItem.className = "";
    divNewItem.id = idSecuencial;

    divNewItem.innerHTML =/*html*/`
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-around">
                    <div class="div-form d-grid">
                        <label for="productName">Nombre del Producto:</label>
                        <input type="text" id="productName" name="productName">
                    </div>
                    <div class="div-form d-grid">
                        <label for="price">Precio:</label>
                        <input type="number" id="price" name="price">
                    </div>
                    <div class="div-form d-grid">
                        <label for="quantity">Cantidad:</label>
                        <input type="number" id="quantity" name="quantity">
                    </div>
                    <div class="d-flex align-items-center">
                        <button type="button" class="btn-form btn btn-success">+</button>
                        <button type="button" class="btn-form btn btn-danger">-</button>
                    </div>
                </div>
            </div>
        </div>
    `
    newItem.append(divNewItem);
    idSecuencial++;
}

// const cliente =()=>{
//     registro.innerHTML =
// }