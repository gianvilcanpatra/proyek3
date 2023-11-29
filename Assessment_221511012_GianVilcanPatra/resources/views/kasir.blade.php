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

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/barang/create">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/kasir/create">Kasir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tenan/create">Tenan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/nota">Nota</a>
          </li>
      </ul>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('kasir.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div style="display: flex; align-items: center;">
                        
                        <h2 class="header-profil">Kasir</h2>
                    </div>
                    <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
                    <div class="mb-3">
                      {{-- <label for="Kasir" class="form-label">Kasir</label>
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Nama Kasir</th>
                                  <th>Nomor Handpone</th>
                                  
                              </tr>
                          </thead>
                          <tbody id = "Barang">
                              <tr>
                                  <td><input type="text" class="form-control" name="Nama" placeholder="Nama Kasir"required></td>
                                  <td><input type="number" class="form-control" name="HP" placeholder="Nomor HP" required></td>
                                  
                              </tr>
                          </tbody>
                        </form>
                      </table> --}}
                  </div>
                  {{-- <button type="button" class="btn btn-info" id="tambahBarang" style="width: 120px;">
                    <img src="image/plus_.png" alt="Icon" style="vertical-align: middle; margin-right: 10px; width: 20px;">
                    Tambah
                  </button> --}}

                {{-- <button class="btn btn-success" style="float: right;" type="submit">
                    Submit</button> --}}

                  <div class="row mt-5">
                    <table class="table" style="margin-left: 10px; margin-right: 10px;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kasir</th>
                                    <th scope="col">No HP</th>
                                    </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($kasirs as $kasir)
                                    <tr>
                                
                                        <td>KS221511012 0{{ $no++ }}</td>
                                        <td>{{ $kasir->Nama }} Gian</td>
                                        <td>{{ $kasir->HP }}</td>
                                        {{-- <td>
                                            <a href="/tampilriwayatpekerjaan/{{ $rowpek->id }}" class="btn btn-warning">Edit</a>
                                            <a href="/deletepekerjaan/{{ $rowpek->id }}" class="btn btn-danger">Delete</a>
                                        </td> --}}
                                
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                      </div>
                      {{-- <button onclick="prevSlide(1)">Kembali</button>
                      <button onclick="nextSlide(2)">Selanjutnya</button> --}}
                  </div>
                  </div>
                </div>
</div>
</body>
</html>