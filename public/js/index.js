// Función para calcular la suma y actualizar el resultado
function calcularSuma() {
    const num1 = parseFloat(document.getElementById('txt_cantidad').value) || 0;
    const num2 = parseFloat(document.getElementById('txt_subtotal').value) || 0;
    const suma = num1 + num2;

    document.getElementById('resultado_lista').textContent = 'Resultado: ' + suma;
}

// Agregar el evento 'input' a ambos inputs
document.getElementById('txt_cantidad').addEventListener('input', calcularSuma);
document.getElementById('txt_subtotal').addEventListener('input', calcularSuma);
