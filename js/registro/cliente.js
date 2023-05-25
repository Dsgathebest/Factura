const btnGenerarCodigo = document.querySelector("#addCode");
btnGenerarCodigo.addEventListener("click", generarCodigo);

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
    let valorN = sumar(btnIdSumar,eFormIdCantidad);
    restar(btnIdRestar,eFormIdCantidad,valorN);
    
    idSecuencial++;
}

function sumar(idSumar,inputCantidad) {
    let valor=1;
    const sumar = document.querySelector(`#${idSumar}`);
    const cantidad =document.querySelector(`#${inputCantidad}`);
    sumar.addEventListener("click",()=>{
        cantidad.value = valor++;
        
    })
    return valor;   
}

function restar(idRestar,inputCantidad,valorNuevo) {
    let valor=valorNuevo;
    const restar = document.querySelector(`#${idRestar}`);
    const cantidad =document.querySelector(`#${inputCantidad}`);
    restar.addEventListener("click",()=>{
        cantidad.value=valor--;
    })
    return valor;
}
// function sumar(idSumar, inputCantidad) {
//     const sumar = document.querySelector(`#${idSumar}`);
//     const cantidad = document.querySelector(`#${inputCantidad}`);
    
//     sumar.addEventListener("click", () => {
//       let valor = parseInt(cantidad.value) || 0;
//       valor++;
//       cantidad.value = valor;
//     });
//   }
  
//   function restar(idRestar, inputCantidad) {
//     const restar = document.querySelector(`#${idRestar}`);
//     const cantidad = document.querySelector(`#${inputCantidad}`);
    
//     restar.addEventListener("click", () => {
//       let valor = parseInt(cantidad.value) || 0;
//       if (valor > 0) {
//         valor--;
//         cantidad.value = valor;
//       }
//     });
//   }

// const cliente =()=>{
//     registro.innerHTML =
// }