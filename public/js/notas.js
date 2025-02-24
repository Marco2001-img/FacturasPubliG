const contacto = document.getElementById('contacto').value;
const telefono = document.getElementById('telefono').value;
const fecha = document.getElementById('fecha').value;
const diseñador = document.getElementById('diseñador').value;
const concepto = document.getElementById('concepto').value;
const entrega = document.getElementById('entrega').value;
const pago = document.getElementById('pago').value;
const agregarProducto = document.getElementById('agregarProducto');
const form = document.getElementById('form');
const txtIva = document.getElementById('txtIva');
const txtAnticipo = document.getElementById('anticipo');
const factura = document.getElementById('factura');
const txt_Total = document.getElementById('txt_Total');
const txtPorpagar = document.getElementById('txtPorpagar');
const tableProductos = document.getElementById('tableProductos');


// Variables para el total y el anticipo
let total = 0;
let iva = 0;
let anticipo = 0;

//agregar



// Evento para agregar productos a la tabla
agregarProducto.addEventListener('click', () => {
const cantidad = document.getElementById('txtCantidad').value
const descripcion = document.getElementById('txtdescripcion').value
const costo = document.getElementById('txtCosto').value

    const newRow = document.createElement('tr');
    const resultado = cantidad * costo;

    newRow.innerHTML = `
        <td>${cantidad}</td>
        <td>${descripcion}</td>
        <td>${costo}</td>
        <td>${resultado}</td>
    `;

    // Sumar al total
    total += resultado;
    actualizarValores();

    tableProductos.appendChild(newRow);
   
    limpia()
});

function limpia()
{
    const cantidad = document.getElementById('txtCantidad').value=""
const descripcion = document.getElementById('txtdescripcion').value=""
const costo = document.getElementById('txtCosto').value=""


}

// Función para actualizar los valores de Total, IVA, Anticipo y Porpagar
function actualizarValores() {
    // Obtener el anticipo
    anticipo = parseFloat(txtAnticipo.value) || 0;

    // Calcular el total con IVA si el checkbox de factura está marcado
    let totalConIva = total;
    if (factura.checked) {
        iva = total * 0.16; // Calcular el IVA
        totalConIva += iva;
        txtIva.textContent = `$${iva.toFixed(2)}`; // Mostrar el IVA
    } else {
        iva = 0;
        txtIva.textContent = '$0.00';
    }

    // Actualizar el total con o sin IVA
    txt_Total.textContent = `$${totalConIva.toFixed(2)}`;

    // Calcular el monto por pagar (total con IVA - anticipo)
    let montoPorPagar = totalConIva - anticipo;
    txtPorpagar.textContent = `$${montoPorPagar.toFixed(2)}`;
}

// Evento para actualizar el anticipo y los valores cuando cambie el anticipo
txtAnticipo.addEventListener('input', () => {
    actualizarValores();
});

// Evento para actualizar los valores cuando se marque o desmarque el checkbox de factura
factura.addEventListener('change', () => {
    actualizarValores();
});


