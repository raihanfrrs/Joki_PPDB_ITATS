<!DOCTYPE html>
<html>

<head>
    <title>PEMBAYARAN BERHASIL</title>
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
    <h2>PEMBAYARAN BERHASIL</h2>

    <h3>Detail Pembayaran</h3>
    <table>
        <tr>
            <th>Nama</th>
            <td>{{ $content['name'] }}</td>
        </tr>
        <tr>
            <th>NISN</th>
            <td>{{ $content['nisn'] }}</td>
        </tr>
        <tr>
            <th>NIK</th>
            <td>{{ $content['nik'] }}</td>
        </tr>
        <tr>
            <th>ID Registrasi</th>
            <td>{{ $content->registration->id }}</td>
        </tr>
    </table>

    <p>Terima kasih telah melakukan pembayaran.</p>
    <p>Dimohon untuk menunggu konfirmasi.</p>
</body>

</html>
