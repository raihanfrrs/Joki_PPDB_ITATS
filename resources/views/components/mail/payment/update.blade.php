<!DOCTYPE html>
<html>

<head>
    <title>PEMBAYARAN DIUBAH</title>
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
    <h2>PEMBAYARAN DIUBAH</h2>

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

    <p>Pembayaran anda telah diubah.</p>
    <p>Dimohon untuk menunggu konfirmasi.</p>
</body>

</html>
