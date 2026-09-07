<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Modern</title>

    <link rel="stylesheet" href="assets/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <div class="logo">
        ✨ Kasir App
    </div>

    <ul>

        <li>
            <a href="index.php">🏠 Dashboard</a>
        </li>

        <li>
            <a href="item.php">📦 Item</a>
        </li>

        <li>
            <a href="transaksi.php">💳 Transaksi</a>
        </li>

        <li>
            <a href="kasir.php">👨‍💼 Kasir</a>
        </li>

        <li>
            <a href="pelanggan.php">👥 Pelanggan</a>
        </li>

        <!-- MENU BARU -->
        <li>
            <a href="laporan.php">📊 Laporan</a>
        </li>

    </ul>

</div>

<!-- MAIN -->
<div class="main">

    <div class="topbar">
        <h1>Dashboard</h1>
    </div>

    <!-- CARD -->
    <div class="cards">

        <div class="card">
            <h2>120</h2>
            <p>Total Item</p>
        </div>

        <div class="card">
            <h2>85</h2>
            <p>Transaksi Hari Ini</p>
        </div>

        <div class="card">
            <h2>5</h2>
            <p>Kasir Aktif</p>
        </div>

        <div class="card">
            <h2>230</h2>
            <p>Pelanggan</p>
        </div>

    </div>

    <!-- LAPORAN -->
    <div class="laporan-box">

        <h2>📊 Laporan Aktivitas</h2>

        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Aktivitas</th>
                    <th>User</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>15 Mei 2026</td>
                    <td>Menambahkan Item Baru</td>
                    <td>Admin</td>
                    <td>Sukses</td>
                </tr>

                <tr>
                    <td>15 Mei 2026</td>
                    <td>Transaksi Penjualan</td>
                    <td>Kasir 1</td>
                    <td>Sukses</td>
                </tr>

                <tr>
                    <td>15 Mei 2026</td>
                    <td>Edit Data Pelanggan</td>
                    <td>Admin</td>
                    <td>Sukses</td>
                </tr>

            </tbody>
        </table>

    </div>

</div>

</body>
</html>