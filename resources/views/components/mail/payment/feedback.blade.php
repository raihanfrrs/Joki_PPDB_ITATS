<!DOCTYPE html>
<html>

<head>
    <title>{{ $content['status'] == 'approved' ? 'PEMBAYARAN ANDA DITERIMA' : 'PEMBAYARAN ANDA DITOLAK' }}</title>
</head>

<body>
    <h2>{{ $content['status'] == 'approved' ? 'PEMBAYARAN ANDA DITERIMA' : 'PEMBAYARAN ANDA DITOLAK' }}</h2>

    @if ($content['status'] == 'approved')
        <p>Selamat Anda Dinyatakan Lolos Dalam Seleksi PPDB MI DARUSSALAM.</p>
    @else
        <p>Silahkan melakukan pembayaran ulang atau upload bukti pembayaran ulang dan cek kembali data Anda.</p>
    @endif
</body>

</html>
