<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Restoran</title>
    <link rel="stylesheet" href="/css/dashboard.css">
</head>
<body>
    <div class="sidebar">
        <h2>KOKI RESTO</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Pelanggan</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Meja</a></li>
            <li><a href="#">Pesanan</a></li>
            <li><a href="#">Transaksi</a></li>
            <li><a href="#">Laporan</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Dashboard</h1>
        </header>
        <section class="stats">
            <div class="stat-card">
                <h3>Total Pendapatan</h3>
                <p>Rp 10,000,000</p>
            </div>
            <div class="stat-card">
                <h3>Pesanan Hari Ini</h3>
                <p>50</p>
            </div>
            <div class="stat-card">
                <h3>Menu Tersedia</h3>
                <p>25</p>
            </div>
        </section>
        <section class="menu-list">
            <h2>Daftar Menu</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama Menu</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nasi Goreng</td>
                        <td>Makanan</td>
                        <td>Rp 25.000</td>
                    </tr>
                    <tr>
                        <td>Ayam Bakar</td>
                        <td>Makanan</td>
                        <td>Rp 30.000</td>
                    </tr>
                    <tr>
                        <td>Mie tektek</td>
                        <td>Makanan</td>
                        <td>Rp 15.000 </td>
                    </tr>
                    <thead>
                    <tr>
                        <th>Nama Menu</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>Air Mineral</td>
                        <td>Minuman</td>
                        <td>5.000</td>
                    </tr>

                    <tr>
                        <td>Es Teh</td>
                        <td>Minuman</td>
                        <td>Rp 5.000</td>
                    </tr>
                    
                        <td>Jus Mangga</td>
                        <td>Minuman</td>
                        <td>Rp 8.000</td>
                    </tr>
                    <tr>
                        <td>Jus Alpukat</td>
                        <td>Minuman</td>
                        <td>Rp 8.000</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
    <script src="dashboard.js"></script>
</body>
</html>