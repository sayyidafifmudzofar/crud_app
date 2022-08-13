<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD APP</title>
  </head>
  <body>
    <div class="container mt-5">

    <?php include('message.php') ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Siswa
                        <a href="index.php" class="btn btn-danger float-end">Kembali</a>
                    </h4>
                </div>
                <div class="card-body">
                  <form action="code.php" method="POST">

                  <div class="mb-3">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label>Email Siswa</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label>Nomor Handphone</label>
                    <input type="text" name="no_hp" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label>Jurusan</label> <br>
                      <select id="jurusan" name="jurusan" class="form-control">
                          <option value="MM">Multimedia</option>
                          <option value="RPL">RPL</option>
                          <option value="TKJ">TKJ</option>
                      </select>
                  </div>
                  <div class="mb-3">
                    <label>Kelas</label>
                    <input type="text" name="kelas" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                  </div>
                  <div class="mb-3">
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                  </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>