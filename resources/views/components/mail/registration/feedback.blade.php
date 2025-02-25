<!DOCTYPE html>
<html>

<head>
    <title>{{ $content['status'] == 'approved' ? 'PENDAFTARAN ANDA DITERIMA' : 'PENDAFTARAN ANDA DITOLAK' }}</title>
</head>

<body>
    <h2>{{ $content['status'] == 'approved' ? 'PENDAFTARAN ANDA DITERIMA' : 'PENDAFTARAN ANDA DITOLAK' }}</h2>

    @if ($content['status'] == 'approved')
        <p>Segera melakukan pembayaran untuk melengkapi pendaftaran Anda.</p>
    @else
        <p>Silahkan melakukan pendaftaran ulang dan cek kembali data Anda.</p>
    @endif
</body>

</html>
