/*
function Operacion(){
    let arrayList= []
    let cantidad = parseFloat( document.getElementById('txtCantidad').value)
    let descripcion = document.getElementById("txtdescripcion").value
let costo = parseFloat( document.getElementById("txtCosto").value)
 //let total = parseFloat( document.getElementById('txtTotal').value)

    let operacion = cantidad * costo
    console.log(operacion)

arrayList.push(cantidad,descripcion,costo,operacion)
limpiar()
console.log(arrayList)
}


const inputCantidad = document.getElementById('txtCantidad')
const inputDescripcion = document.getElementById('txtdescripcion')
const inputCosto = document.getElementById('txtCosto')
const btnAgregar =  document.querySelector('.btn-add')
const ul = document.querySelector('ul')

btnAgregar.addEventListener("click", (e)=> {
    e.preventDefault()
    console.log(1)

    const textCantidad = inputCantidad.value
    const txtDescripcion = inputDescripcion.value
    const txtCosto = inputCosto.value

    const liCantidad = document.createElement('li')
    const liDescripcion = document.createElement('li')
    const liCosto = document.createElement('li')

    const pCantidad = document.createElement('p')
    const pDescripcion = document.createElement('p')
    const pCosto = document.createElement('p')

    pCantidad.textContent = textCantidad
    pDescripcion.textContent = txtDescripcion
    pCosto.textContent = txtCosto

    liCantidad.appendChild(pCantidad)
    liDescripcion.appendChild(pDescripcion)
    liCosto.appendChild(pCosto)

    ul.appendChild(liCantidad)
    ul.appendChild(liDescripcion)
    ul.appendChild(liCosto)

    inputCantidad.value=""
    inputDescripcion.value=""
    inputCosto.value=""

    console.log(textCantidad)
    console.log(txtDescripcion)
    console.log(txtCosto)
    console.log(ul)
})


function limpiar()
{
    parseFloat( document.getElementById('txtCantidad').value = "")
    document.getElementById("txtdescripcion").value=""
    parseFloat( document.getElementById("txtCosto").value="")
    parseFloat( document.getElementById('txtTotal').value="")
}

document.getElementById('whatsappLink').addEventListener('click', function(e) {
    e.preventDefault();
    window.open('whatsapp://');
});
*/



const productos = ['Producto 1', 'Producto 2', 'Producto 3', 'Producto 4'];

const lista = document.getElementById('listaProductos');
productos.forEach(function(producto) {
    // Crear un nuevo elemento <li>
    const td = document.createElement("tr")
    td.textContent = producto;               // Asignar el texto del producto
    //lista.appendChild(li);                   // Agregar el <li> a la lista
    //td.appendChild(li)
    lista.appendChild(td)
});
