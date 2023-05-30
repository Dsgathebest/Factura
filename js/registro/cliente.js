
const newItem = document.querySelector("#newItem");
const addItem = document.querySelector("#addItem");
addItem.addEventListener("click",(e)=>{
    e.preventDefault();
    e.stopImmediatePropagation();
    agregarProducto();
} );

let codigoSecuencial = 1;
let idSecuencial = 1;

// Geberar codigo de factura
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

// Agregar, sumar y restar producto
function agregarProducto() {
    
    let btnIdSumar ="btnS"+idSecuencial.toString();
    let btnIdRestar ="btnR"+idSecuencial.toString();
    let eFormIdCantidad="eFormC"+idSecuencial.toString();
    let eFormIdPrice="eFormP"+idSecuencial.toString();
    let eFormIdNameProduct="eFormNP"+idSecuencial.toString();
    let eFormIdTotal="eFormT"+idSecuencial.toString();
    
    let divNewItem = document.createElement("div");
    divNewItem.className = "";
    divNewItem.id = idSecuencial;

    divNewItem.innerHTML =/*html*/`
        <div class="card new-item">
            <div class="card-body">
                <div class="d-flex justify-content-around flex-wrap">
                    <div class="d-flex justify-content-around">
                        <div class="div-form e-form d-grid">
                            <label for="${eFormIdNameProduct}">Nombre del Producto:</label>
                            <input type="text" id="${eFormIdNameProduct}" name="${eFormIdNameProduct}">
                        </div>
                        <div class="div-form e-form d-grid">
                            <label for="${eFormIdPrice}">Precio:</label>
                            <input type="number" id="${eFormIdPrice}" name="${eFormIdPrice}">
                        </div>
                        <div class="div-form e-form d-grid ">
                            <label for="${eFormIdCantidad}">Cantidad:</label>
                            <input type="text" id="${eFormIdCantidad}" name="${eFormIdCantidad}">
                        </div>
                        <div class="div-form e-form d-grid ">
                            <label for="${eFormIdTotal}">Total:</label>
                            <input type="text" id="${eFormIdTotal}" name="${eFormIdTotal}">
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <button type="button" id="${btnIdSumar}" class="btn-form btn btn-success">+</button>
                        <button type="button" id="${btnIdRestar}" class="btn-form btn btn-danger">-</button>
                    </div>
                </div>
            </div>
        </div>
    `
    newItem.append(divNewItem);
    sumar(btnIdSumar,eFormIdCantidad,eFormIdTotal,eFormIdPrice);
    restar(btnIdRestar,eFormIdCantidad,eFormIdTotal,eFormIdPrice);
    
    idSecuencial++;
}

function sumar(idSumar, inputCantidad,inputTotal,inputPrecio) {
    const btnSumar = document.querySelector(`#${idSumar}`);
    const cantidadInput = document.querySelector(`#${inputCantidad}`);
    const totalInput =document.querySelector(`#${inputTotal}`);
    const precioInput =document.querySelector(`#${inputPrecio}`);

    
    btnSumar.addEventListener("click", () => {
      let valor = parseInt(cantidadInput.value) || 0;
      let precio =parseInt(precioInput.value) || 0;
      valor++;
      cantidadInput.value = valor;
      
      if (precio==0){
        totalInput.value = 0;
      }
      else {
        totalInput.value = valor*precio
      }

    });
  }
  
  function restar(idRestar, inputCantidad,inputTotal,inputPrecio) {
    const btnRestar = document.querySelector(`#${idRestar}`);
    const cantidadInput = document.querySelector(`#${inputCantidad}`);
    const totalInput =document.querySelector(`#${inputTotal}`);
    const precioInput =document.querySelector(`#${inputPrecio}`);
    
    btnRestar.addEventListener("click", () => {
      let valor = parseInt(cantidadInput.value) || 0;
      let precio =parseInt(precioInput.value) || 0;

      if (valor > 0) {
        valor--;
        cantidadInput.value = valor;
      }
      
      if (precio==0){
        totalInput.value = 0;
      }
      else {
        totalInput.value = valor*precio
      }
    });
  }

// const cliente =()=>{
//     registro.innerHTML =
// }