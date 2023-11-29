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
          <a class="nav-link active" aria-current="page" href="/barang/create">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kasir/create">Kasir</a>
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
                    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div style="display: flex; align-items: center;">
                        
                        <h2 class="header-profil">Barang</h2>
                    </div>
                    <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
                    <div class="mb-3">
                      <label for="riwayatPekerjaan" class="form-label"></label>
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Nama Barang</th>
                                  <th>Satuan</th>
                                  <th>Harga Satuan</th>
                                  <th>Stok</th>
                              </tr>
                          </thead>
                          <tbody id = "Barang">
                              <tr>
                                  <td><input type="text" class="form-control" name="NamaBarang" placeholder="Nama Barang" required></td>
                                  <td><input type="text" class="form-control" name="Satuan" placeholder="Satuan" required></td>
                                  <td><input type="number" class="form-control" name="HargaSatuan" placeholder="Harga satuan" required></td>
                                  <td><input type="number" class="form-control" name="Stok" placeholder="Stok"  required></td>
                                  
                              </tr>
                          </tbody>
                        </form>
                      </table>
                  </div>
                  {{-- <button type="button" class="btn btn-info" id="tambahBarang" style="width: 120px;">
                    <img src="image/plus_.png" alt="Icon" style="vertical-align: middle; margin-right: 10px; width: 20px;">
                    Tambah
                  </button> --}}

                <button class="btn btn-success" style="float: right;" type="submit">
                    Submit</button>

                  <div class="row mt-5">
                    <table class="table" style="margin-left: 10px; margin-right: 10px;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Stok</th>
                                    </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($barangs as $barang)
                                    <tr>
                                
                                        <td>BRG221511012 0{{ $no++ }}</td>
                                        <td>{{ $barang->NamaBarang }} Gian</td>
                                        <td>{{ $barang->Satuan }}</td>
                                        <td>Rp.{{ $barang->HargaSatuan }}</td>
                                        <td>{{ $barang->Stok }}</td>
                                        <td>
                                            <a href="/tampilbarang/{{ $barang->KodeBarang }}" class="btn btn-warning">Edit</a>
                                            <a href="/deletebarang/{{ $barang->KodeBarang }}" class="btn btn-danger">Delete</a>
                                        </td>
                                
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