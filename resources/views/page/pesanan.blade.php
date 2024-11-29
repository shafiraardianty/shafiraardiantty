<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Restoran</title>
    <link rel="stylesheet" href="/css/pesanan.css">
</head>

<body>
    <div class="container">
        <h1> Pemesanan Restoran</h1>

        <!-- Form Pemesanan -->
        <div class="form-container">
            <h2>Tambah Pesanan</h2>
            <form id="pesananForm">
                <div class="form-group">
                    <label for="namaPelanggan">Nama Pelanggan</label>
                    <input type="text" id="namaPelanggan" name="nama_pelanggan" placeholder="Nama pelanggan" required>
                </div>

                <div class="form-group">
                    <label for="namaMeja">Nama Meja</label>
                    <input type="text" id="namaMeja" name="nama_meja" placeholder="Meja 1" required>
                </div>

                <div class="form-group">
                    <label for="menu">Menu</label>
                    <select id="menu" name="id_menu" required>
                        <option value="">Pilih Menu</option>
                        <option value="1">Nasi Goreng - Rp 20.000</option>
                        <option value="2">Mie Goreng - Rp 18.000</option>
                        <option value="3">Soto Ayam - Rp 25.000</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" id="jumlah" name="jumlah" min="1" value="1" required>
                </div>

                <button type="submit">Tambah Pesanan</button>
            </form>
        </div>

        <!-- Daftar Pesanan -->
        <div class="table-container">
            <h2>Daftar Pesanan</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Nama Meja</th>
                        <th>Menu</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="pesananTableBody">
                    <!-- Data pesanan akan ditambahkan di sini -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>