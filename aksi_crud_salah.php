<?php

//panggil koneksi database
include "koneksi.php";

// Uji jika tombol simpan di klik
if(isset($_POST['bsimpan'])) {

    //persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO tmhs (nim, nama, alamat, lulusan)
                                        VALUES ('$_POST[tnim],
                                                '$_POST[tnama],
                                                '$_POST[talamat],
                                                '$_POST[tlulusan]')");

    // Jika simpan sukses
    if ($simpan){
        echo "<script>
                alert('Simpan data Sukses bro!');
                document.location='index.php';
                </script>";
    } else {               
        echo "<script>       
                alert('Simpan data Gagal coy!');
                document.location='index.php';
                </script>;
            }

    }

?>                            