<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

function generatePDF() {
  const doc = new jsPDF();

  // Agregar texto
  doc.text('Hola, mundo!', 10, 10);

  // Agregar una imagen
  doc.addImage('https://www.example.com/image.png', 'PNG', 15, 40, 30, 30);

  // Crear una tabla
  doc.autoTable({
    head: [['Nombre', 'Edad']],
    body: [
      ['John Doe', '30'],
      ['Jane Smith', '25']
    ]
  });

  // Descargar el PDF
  doc.save('mi-pdf.pdf');
}
