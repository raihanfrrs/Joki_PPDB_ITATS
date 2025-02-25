<!DOCTYPE html>
<html>

<head>
    <title>SELAMAT DATANG</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>SELAMAT DATANG DI PPDB MI DARUSSALAM</h2>

    <h3>Calon Siswa Baru</h3>
    <table>
        <tr>
            <th>Nama</th>
            <td>{{ $content['name'] }}</td>
        </tr>
        <tr>
            <th>NISN</th>
            <td>{{ $content['nisn'] }}</td>
        </tr>
    </table>

    <h3>Panduan</h3>
    <ol>
        <li>
            Pada bagian menu, klik ‘Pendaftaran’.
        </li>
        <li>
            Isi Seluruh formulir yang ditampilkan kemudian periksa kembali,
            pastikan tidak ada data yang salah.
        </li>
        <li>
            Klik Submit, kemudian klik confirm. setelah di-confirm, data tidak
            dapat diubah kembali.
        </li>
        <li>
            jika sudah, bukti pendaftaran akan ditampilkan dan dapat diunduh
            menjadi PDF.
        </li>
        <li>
            Upload bukti pembayaran, berupa foto
        </li>
    </ol>

    <p>Mohon untuk segera masuk serta melengkapi berkas dan pembayaran.</p>
</body>

</html>
