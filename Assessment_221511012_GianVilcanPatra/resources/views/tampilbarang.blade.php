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
s
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <div style="display: flex; align-items: center;">
                        @foreach ($barangs as $item)
                        <form action="{{ route('updatebarang', ['id' => $item->KodeBarang] ) }}" method="POST" enctype="multipart/form-data">
                            @csrf   
                        <h2 class="header-profil">Barang</h2>
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
                                  <td><input type="text" class="form-control" name="NamaBarang" placeholder="Nama Barang" style="width:200px" value="{{ $item->NamaBarang }}" required></td>
                                  <td><input type="text" class="form-control" name="Satuan" placeholder="Satuan" style="width:250px" value="{{$item->Satuan}}" required></td>
                                  <td><input type="number" class="form-control" name="HargaSatuan" placeholder="harga satuan" value="{{$item->HargaSatuan}}" required></td>
                                  <td><input type="number" class="form-control" name="Stok" style="width:130px;" value="{{$item->Stok}}" required></td>
                                  
                              </tr>
                          </tbody>
                          @endforeach
                      </table>
                  </div>
                  <button class="btn btn-info" style="float: right;" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</head>
</html>