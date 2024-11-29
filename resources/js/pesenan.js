document.getElementById('pesananForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const namaPelanggan = document.getElementById('namaPelanggan').value;
    const namaMeja = document.getElementById('namaMeja').value;
    const menu = document.getElementById('menu');
    const menuText = menu.options[menu.selectedIndex].text;
    const hargaMenu = parseInt(menuText.split('- Rp ')[1].replace('.', '').trim());
    const jumlah = parseInt(document.getElementById('jumlah').value);
    const totalHarga = hargaMenu * jumlah;

    // Tambahkan pesanan ke tabel
    const tableBody = document.getElementById('pesananTableBody');
    const row = document.createElement('tr');
    row.innerHTML = `
        <td>${namaPelanggan}</td>
        <td>${namaMeja}</td>
        <td>${menuText.split('-')[0].trim()}</td>
        <td>${jumlah}</td>
        <td>Rp ${totalHarga.toLocaleString('id-ID')}</td>
        <td><button onclick="hapusPesanan(this)">Hapus</button></td>
    `;
    tableBody.appendChild(row);

    // Reset form
    document.getElementById('pesananForm').reset();
});

function hapusPesanan(button) {
    const row = button.parentElement.parentElement;
    row.remove();
}