<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data pasien </title>
    <link rel="stylesheet"  href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>tambah data pasien</h3>

                <form action="koneksi.php" method="post">
                    <div class="form-group">
                        <label for="idpasien">ID pasien</label>
                        <input type="text" class="form-control mb-3" name="idpasien" palceholder="ID pasien">
                     </div>
                     <div class="form-group">
                        <label for="nmpasien">nama pasien</label>
                        <input type="text" class="form-control mb-3" name="nmpasien" placeholder="nama pasien">
                   </div>
                   <div class="form-group">
                    <label for="jk">jenis kelamin</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jk" value="perempuan"> perempuan
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jk" value="laki-laki"> laki-laki
                 </div>    

                 <div class="from-group mt-3">
                    <label for="alamat">alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="s" rows="3" placeholder="alamat"></textarea>
                       </div>
                       <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="simpan" class="form-control btn btn-primary">
                                </div>
                            </div>
                      </form>
                  </div>
            </div>

    </div>
</body>
</html>
                    