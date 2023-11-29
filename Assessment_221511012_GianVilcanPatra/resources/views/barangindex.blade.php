<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/tambahdata.css') }}">

    <title>Add Data</title>
</head>
<h1>Data Barang Nota</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Nota</th>
                <th>Kode Barang</th>
                <th>Jumlah Barang</th>
                <th>Harga Satuan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->KodeNota }}</td>
                    <td>{{ $barang->KodeBarang }}</td>
                    <td>{{ $barang->JumlahBarang }}</td>
                    <td>{{ $barang->HargaSatuan }}</td>
                    <td>{{ $barang->Jumlah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>