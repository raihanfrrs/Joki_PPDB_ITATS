<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration PDF - {{ $student->name }}</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        h2 {
            margin-bottom: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left;
        }

        hr {
            border: 1px solid #000;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    @if ($imageBase64)
        <table style="width: 100%; margin-bottom: 10px; border: none;" cellspacing="0" cellpadding="0">
            <tr style="border: none;">
                <td style="width: 15%; border: none;">
                    <img src="{{ $imageBase64 }}" alt="Logo" style="width: 80px;">
                </td>
                <td style="width: 85%; text-align: center; border: none;">
                    <div style="font-size: 16px; font-weight: bold;">PANITIA PENERIMAAN PESERTA DIDIK BARU</div>
                    <div style="font-size: 16px; font-weight: bold;">MI DARUSSALAM KEPUHSARI</div>
                    <div style="font-size: 12px;">Jl. Raya Pagesangan No.12, Pagesangan, Kec. Jambangan, Surabaya, Jawa
                        Timur 60233</div>
                </td>
            </tr>
        </table>
    @else
        <h2 style="text-align: center;">PPDB MI DARUSSALAM KEPUHSARI</h2>
        @endifr;">PPDB MI DARUSSALAM KEPUHSARI</h2>
    @endif
    <hr>

    <h3>Data Siswa</h3>
    <table>
        <tr>
            <th>Nama Lengkap</th>
            <td>{{ $student->name ?? '-' }}</td>
        </tr>
        <tr>
            <th>NISN (Nomor Induk Siswa Nasional)</th>
            <td>{{ $student->nisn ?? '-' }}</td>
        </tr>
        <tr>
            <th>NIK (Nomor Induk Kependudukan)</th>
            <td>{{ $student->nik ?? '-' }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $student->gender == 'male' ? 'Laki-laki' : 'Perempuan' }}</td>
        </tr>
        <tr>
            <th>Tempat, Tanggal Lahir</th>
            <td>{{ $student->pob ?? '-' }}, {{ $student->dob ?? '-' }}</td>
        </tr>
        <tr>
            <th>Agama</th>
            <td>{{ $student->religion ?? '-' }}</td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td>{{ $student->phone ?? '-' }}</td>
        </tr>
        <tr>
            <th>Alamat Surel</th>
            <td>{{ $student->email ?? '-' }}</td>
        </tr>
        <tr>
            <th>Alamat Rumah</th>
            <td>{{ $student->address ?? '-' }}</td>
        </tr>
        <tr>
            <th>Tahun Kelulusan</th>
            <td>{{ $student->school_year ?? '-' }}</td>
        </tr>
        <!-- Tambah baris lain sesuai kebutuhan -->
    </table>

    @if ($student->father && !empty($student->father->name))
        <hr>
        <h3>Data Ayah</h3>
        <table>
            <tr>
                <th>Nama</th>
                <td>{{ $student->father->name }}</td>
            </tr>
            <tr>
                <th>NIK (Nomor Induk Kependudukan)</th>
                </th>
                <td>{{ $student->father->nik }}</td>
            </tr>
            <tr>
                <th>KK (Nomor Kartu Keluarga)</th>
                </th>
                <td>{{ $student->father->kk_number }}</td>
            </tr>
            <tr>
                <th>Pendidikan</th>
                <td>{{ $student->father->education }}</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>{{ $student->father->job }}</td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td>{{ $student->father->phone ?? '-' }}</td>
            </tr>
            <tr>
                <th>Alamat Surel</th>
                <td>{{ $student->father->email ?? '-' }}</td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>{{ $student->father->pob ?? '-' }}, {{ $student->father->dob ?? '-' }}</td>
            </tr>
            <tr>
                <th>Alamat Rumah</th>
                <td>{{ $student->father->address ?? '-' }}</td>
            </tr>
        </table>
    @endif

    @if ($student->mother && !empty($student->mother->name))
        <hr>
        <h3>Data Ibu</h3>
        <table>
            <tr>
                <th>Nama</th>
                <td>{{ $student->mother->name }}</td>
            </tr>
            <tr>
                <th>NIK (Nomor Induk Kependudukan)</th>
                </th>
                <td>{{ $student->mother->nik }}</td>
            </tr>
            <tr>
                <th>KK (Nomor Kartu Keluarga)</th>
                </th>
                <td>{{ $student->mother->kk_number }}</td>
            </tr>
            <tr>
                <th>Pendidikan</th>
                <td>{{ $student->mother->education }}</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>{{ $student->mother->job }}</td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td>{{ $student->mother->phone ?? '-' }}</td>
            </tr>
            <tr>
                <th>Alamat Surel</th>
                <td>{{ $student->mother->email ?? '-' }}</td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>{{ $student->mother->pob ?? '-' }}, {{ $student->mother->dob ?? '-' }}</td>
            </tr>
            <tr>
                <th>Alamat Rumah</th>
                <td>{{ $student->mother->address ?? '-' }}</td>
            </tr>
        </table>
    @endif

    @if ($student->custodian && !empty($student->custodian->name))
        <hr>
        <h3>Data Wali</h3>
        <table>
            <tr>
                <th>Nama</th>
                <td>{{ $student->custodian->name }}</td>
            </tr>
            <tr>
                <th>Hubungan</th>
                <td>{{ $student->custodian->relation }}</td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td>{{ $student->custodian->phone }}</td>
            </tr>
        </table>
    @endif
</body>

</html>
