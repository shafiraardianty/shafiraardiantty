<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Meja</title>
  <link rel="stylesheet" href="/css.meja.css">
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <button>Menu</button>
      <button>Meja</button>
      <button>Pelanggan</button>
      <button>Pesanan</button>
      <button>Order</button>
      <button>Pelaporan</button>
    </div>

    <div class="content">
      <form class="form">
        <label for="idMeja">ID Meja</label>
        <input type="text" id="idMeja" value="MJ003">

        <label for="noMeja">No Meja</label>
        <input type="text" id="noMeja">

        <label for="kategori">Kategori</label>
        <select id="kategori">
          <option>Tidak Dipilih</option>
          <option>Family</option>
          <option>Double</option>
        </select>

        <label for="status">Status</label>
        <select id="status">
          <option>Tidak Dipilih</option>
          <option>Terisi</option>
          <option>Kosong</option>
        </select>

        <div class="buttons">
          <button type="button" class="save">Simpan</button>
          <button type="button" class="edit">Edit</button>
          <button type="button" class="delete">Hapus</button>
        </div>
      </form>

      <table>
        <thead>
          <tr>
            <th>ID Meja</th>
            <th>No Meja</th>
            <th>Kategori</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>MJ001</td>
            <td>1</td>
            <td>Family</td>
            <td>Terisi</td>
          </tr>
          <tr>
            <td>MJ002</td>
            <td>2</td>
            <td>Double</td>
            <td>Kosong</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>