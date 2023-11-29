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

    <ul class="nav nav-tabs mb-10">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/barang/create">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kasir/create">Kasir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tenan/create">Tenan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/nota">Nota</a>
          </li>
      </ul>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    {{-- <h2 class="header-profil">Nota</h2> --}}
                    <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">

                  <div class="row mt-5">
                    <table class="table" style="margin-left: 10px; margin-right: 10px;">
                            <thead>
                                <tr>
                                    <th scope="col">Kode Nota</th>
                                    <th scope="col">Nama Tenan</th>
                                    <th scope="col">Nama Kasir</th>
                                    <th scope="col">Tgl Nota</th>
                                    <th scope="col">Jumlah Belanja</th>
                                    <th scope="col">Diskon(%)</th>
                                    <th scope="col">Total</th>
                                    
                                    </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($notas as $nota)
                                    <tr>
                                
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $nota->NamaTenan }}</td>
                                        <td>{{ $nota->Nama }}</td>
                                        <td>{{ $nota->TglNota }}</td>
                                        <td>{{ $nota->JamNota }}</td>
                                        <td>{{ $nota->JumlahBelanja }}</td>
                                        <td>{{ $nota->Diskon }}</td>
                                        <td>{{ $nota->Total }}</td>
                                    </tr>
                            </tbody>
                            @endforeach
                        </table>
                      </div>
                  </div>
                  </div>
                </div>
</div>
</body>
</html>