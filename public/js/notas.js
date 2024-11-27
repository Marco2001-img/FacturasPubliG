const contacto = document.getElementById('contacto').value
const telefono = document.getElementById('telefono').value
const fecha = document.getElementById('fecha').value
const diseñador = document.getElementById('diseñador').value
const concepto = document.getElementById('concepto').value
const entrega = document.getElementById('entrega').value
const pago = document.getElementById('pago').value
const tableProductos = document.getElementById('tableProductos')
const agregarProducto = document.getElementById('agregarLista')
const form = document.getElementById('form')


//operaciones

let total = 0

document.getElementById('anticipo').addEventListener('input', () => {
    const anticipo = parseFloat(document.getElementById('anticipo').value);
    const txtPorpagar = document.getElementById('txtPorpagar');

    // Verificar si el anticipo es un número válido y mayor a 0
    if (!isNaN(anticipo) && anticipo >= 0) {
        const anti = anticipo - total; // Calcular el valor restante
        txtPorpagar.textContent = '$ ' + anti // Mostrar el resultado
    } else {
        txtPorpagar.textContent = ''; // Limpiar el campo de porpagar si anticipo no es válido
    }
});

//boton
agregarProducto.addEventListener('click', () => {
    const txtCantidad = document.getElementById('txtCantidad').value
    const txtdescripcion = document.getElementById('txtdescripcion').value
    const txtCosto = document.getElementById('txtCosto').value
    const txt_Total = document.getElementById('txt_Total')
   // const anticipo = parseFloat(document.getElementById('anticipo').value) 
    const txtPorpagar = document.getElementById('txtPorpagar')
    
    const newRow = document.createElement('tr')
    const resultado = txtCantidad*txtCosto

    newRow.innerHTML= `
        <td>${txtCantidad}</td>
         <td>${txtdescripcion}</td>
          <td>${txtCosto}</td>
           <td>$ ${resultado}</td>
    `
    //sumar lista
    total+= resultado
    txt_Total.textContent='$'+ total
    
    facturar(total,txt_Total)
    
    tableProductos.appendChild(newRow)

    limpiar()
    
    //anticipo
    const anticipo = parseFloat(document.getElementById('anticipo').value);
    if (!isNaN(anticipo) && anticipo >= 0) {
        const anti = anticipo - total;
        txtPorpagar.textContent = '$ ' + anti
    }

   

})

function limpiar(){
    txtCantidad.value=''
    txtdescripcion.value=''
    txtCosto.value = ''
}

function facturar(total,txtFinal)
{
    const txtIva = document.getElementById('txtIva')
    const factura = document.getElementById('factura')
    factura.addEventListener('change', ()=> {
        if (factura.checked) {
           
            const resultado = total * 0.16
            txtIva.textContent = resultado
            
            const final = txtFinal + resultado
            final.textContent = txtFinal

            console.log("El checkbox está marcado");

        } else {
            txtIva.textContent='$0.00'
            console.log("El checkbox está desmarcado");
          
        }
    })
   
}
facturar()