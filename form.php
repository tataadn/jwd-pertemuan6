<?php include 'cek-form.php';?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>FORM PELATIHAN</title>
  </head>
  <body class="bg-info">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6 py-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center">FORM PENDATAAN</h2>
                            <h6 class="text-center">Tugas Pelatihan Junior Web Developer</h6>
                                <?php
                                if ($error) {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $error ?>
                                </div>
                                <?php
                                    header("location:form.php");
                                }
                                ?>
                                <?php
                                if ($sukses) {
                                ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $sukses ?>
                                </div>
                                <?php
                                    header("location:form.php");
                                }
                                ?>
                            <form action="" method="POST" class="p-4">
                                <div class="mb-3">
                                    <label class="form-label">Nama Anda</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat Anda</label>
                                    <textarea class="form-control" name="alamat" style="height: 100px"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tempat Anda</label>
                                    <textarea class="form-control" name="tempat" style="height: 100px"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" name="jenis_kelamin">
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUsia1" class="form-label">Usia Anda</label>
                                    <input type="number" name="usia" class="form-control">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6 py-3">
                    <div class="card">
                        <div class="card-body">
                        <h2 class="text-center text-primary">HASIL PENDATAAN</h2>
                        <h6 class="text-center pb-2">Tugas Pelatihan Junior Web Developer</h6>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Tempat</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Usia</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php
                            $sql2   = "select * from form order by id asc";
                            $q2     = mysqli_query($koneksi, $sql2);
                            while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $nama       = $r2['nama'];
                            $alamat     = $r2['alamat'];
                            $tempat     = $r2['tempat'];
                            $jk         = $r2['jenis_kelamin'];
                            $usia       = $r2['usia'];

                        ?>
                                <tr>
                                <th scope="row"><?php echo $id ?></th>
                                <td><?php echo $nama ?></td>
                                <td><?php echo $alamat ?></td>
                                <td><?php echo $tempat ?></td>
                                <td><?php echo $jk ?></td>
                                <td><?php echo $usia ?></td>
                                </tr>
                        <?php
                            }
                        ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
