<!DOCTYPE html>
<html>

<head>
    <title>Ubah Pendaftaran Berhasil</title>
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
    <h2>Ubah Pendaftaran Berhasil</h2>
    <p>Berikut adalah data anda yang telah diubah:</p>

    <h3>Data Siswa</h3>
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
            <th>Tempat, Tanggal Lahir</th>
            <td>{{ $content['pob'] }}, {{ $content['dob'] }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $content['address'] }}, {{ $content['city'] }}</td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td>{{ $content['phone'] }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $content['email'] }}</td>
        </tr>
    </table>

    <p>Terima kasih telah mendaftar.</p>
</body>

</html>
