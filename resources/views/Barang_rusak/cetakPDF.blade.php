<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak | Laporan Barang Rusak</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        header {
            background-color: #2c00be; /* Warna Orange Cerah (#FFD79D) */
            padding: 20px;
            color: #fff;
            display: flex;
            align-items: center;
        }
        .logo img {
            max-width: 100px;
        }
        .company-info {
            margin-left: 20px;
        }
        h1 {
            font-size: 1.5em;
            margin: 0;
        }
        main {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px; /* Ukuran font untuk seluruh tabel */
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #2c00be; /* Warna Orange Cerah (#FFD79D) untuk header kolom */
            color: #fff;
        }
        tbody tr:nth-child(even) {
            background-color: #9bc6ff; /* Warna oranye muda untuk baris genap */
        }
        tfoot {
            font-weight: bold;
            background-color: #2c00be; /* Warna Orange Cerah (#FFD79D) untuk footer */
            color: #fff;
        }
        footer {
            text-align: right;
            margin-top: 20px;
            padding: 20px;
            background-color: #c9e0ff; /* Warna oranye muda untuk footer */
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.jpg" alt="Logo">
        </div>
        <div class="company-info">
            <h1>RAPID NETWORK</h1>
            <p>Komplek Rosella Modern, No.12, Guntungmanggis, Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan Selatan 70731</p>
            <p>Website : https://rapid.net.id | Email : helpdesk@rapid.net.id</p>
        </div>
    </header>

    <main>
        <h2 class="title">Laporan Barang Rusak</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Jenis Barang</th>
                    <th>Kondisi</th>
                    <th>Deskripsi</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->kode_barang }}</td>
                        <td>{{ $item->jenis_barang }}</td>
                        <td>{{ $item->kondisi }}</td>
                        <td>{{ $item->deskripsi }}</td>

                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" style="text-align: right;">Total :</td>
                    <td>{{$data->count() }}</td>

                </tr>

            </tfoot>
        </table>
    </main>

    <footer>
        <p>Banjarbaru, <?php echo date('d F Y'); ?></p>
        <p>Hormat Kami,</p>
        <p>Admin</p>
    </footer>
</body>
</html>
