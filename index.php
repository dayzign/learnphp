<?php

    //panggil koneksi database
    include "koneksi.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="mt-3">
        <h3 class="text-center">Bustami Website, Welcome!</h3>
        </div>
        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
              Data Karyawan
            </div>

        <div class="card-body">

          <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modaltambah">
          Tambah Data Karyawan
        </button>

              <table class="table table-bordered table-stripped table-hover">
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Lulusan</th>
                  <th>Action</th>
                </tr>

                <?php

                //prepare tampilkan data
                $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * FROM tmhs ORDER BY id_mhs DESC");
                while ($data = mysqli_fetch_array($tampil)):
                ?>

                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nim'] ?></td>
                  <td><?= $data['nama'] ?></td>
                  <td><?= $data['alamat'] ?></td>
                  <td><?= $data['lulusan'] ?></td>
                  <td>
                    <a href="#"  class="btn btn-warning">Ubah</a>
                    <a href="#"  class="btn btn-danger">Hapus</a>
                  </td>
                </tr>

                <?php endwhile; // End of PHP while loop ?>
              </table>

              <!-- Awal Modal -->
              <div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Karyawan</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form method="post" action="aksi.crud.php">
                    <div class="modal-body">                                              
                            <div class="mb-3">
                                <label class="form-label">NIK</label>
                                <input type="text" class="form-control" name="tnim" placeholder="masukkan NIK anda">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="tnama" placeholder="masukkan Nama Lengkap anda">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Alamat</label>
                              <input type="text" class="form-control" name="talamat" placeholder="masukkan Alamat anda">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Lulusan</label>
                              <select class="form-select" name="tlulusan">
                                  <option></option>
                                  <option value="STIE Perbanas Jakarta">STIE Perbanas Jakarta</option>
                                  <option value="Universitas Indonesia">Universitas Indonesia</option>
                                  <option value="Universitas Padjadjaran">Universitas Padjadjaran</option>
                                  <option value="Universitas Diponegoro">Universitas Diponegoro</option> 
                                  <option value="Universitas Brawijaya">Universitas Brawijaya</option>
                                  <option value="Universitas Andalas">Universitas Andalas</option>   
                              </select>
                            </div>
   
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
              <!-- Akhir Modal -->

            </div>
          </div>

        </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    

</body>
</html>
