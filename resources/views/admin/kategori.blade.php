
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <h2>Input kategori </h2>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Judul Buku </label>
                        <input type="text" class="form-control" name="judul" >
                    </div>
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Judul Buku </label>
                        <input type="text" class="form-control" name="judul" >
                    </div>
                    <table class="table">
                      <tr>
                        <td>#</td>
                        <td>nama</td>
                        <td> colspan=2>menu</td>

                      </tr>
                      @forelse($kat as $k)
                      <tr>
                        <td>{{$k->$id}}</td>
                        <td>{{$k->nama}}</td>
                        <td>Edit</td>
                        <td>Delete</td>
                      </tr>
                      @empty
                      <tr>
                        <td>
                          DataKosong
                        </td>
                      </tr>
                      @endforelse
                    </table>
                    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
