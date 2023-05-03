<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center mt-4 mb-5">Level 3 - Tugas 10</h1>
        <a href="/produk/create" class="btn btn-success mb-3">Tambah Data</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($Produks as $produk)  
                <tr>
                    <th scope="row">1</th>
                    <td>{{$produk->nama_produk}}</td>
                    <td>{{$produk->keterangan}}</td>
                    <td>{{$produk->harga}}</td>
                    <td>{{$produk->jumlah}}</td>
                    <td>
                        <form action="/produk/{{$produk->id}}" method="post">
                            @method('delete')
                            @csrf
                            <a href="/produk/{{$produk->id}}/edit" class="btn btn-success">Edit</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>