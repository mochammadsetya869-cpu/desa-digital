<!DOCTYPE html>
<html>
<head>
    <title>Perpindahan Penduduk</title>

    <style>
        body{
            font-family: sans-serif;
            padding: 30px;
        }

        h1{
            text-align:center;
        }

        p{
            font-size:16px;
            margin-bottom:12px;
        }
    </style>

</head>
<body>

    <h1>Perpindahan Penduduk</h1>

    <p><strong>Nama:</strong> {{ $data->nama }}</p>

    <p><strong>NIK:</strong> {{ $data->nik }}</p>

    <p><strong>Tujuan:</strong> {{ $data->kabupaten_tujuan }}</p>

    <p><strong>Status:</strong> {{ $data->status }}</p>

</body>
</html>