//buscador de informacion

const searchInput = document.querySelector('.buscador');
const tableRows = document.querySelectorAll('.table tbody tr');

searchInput.addEventListener('input', (event) => {
  const searchTerm = event.target.value.toLowerCase();

  tableRows.forEach((row) => {
    const rowText = row.textContent.toLowerCase();

    if (rowText.includes(searchTerm)) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  });
});