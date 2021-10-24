<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

    $nip_data = $_GET['nip'];
    $data_karyawan = mysqli_query($conn, "SELECT * FROM tb_pendataan WHERE nip = '".$nip_data."' ");

    $p = mysqli_fetch_object($data_karyawan);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Form Pendataaan Karyawan | Administrator </title>
        <link rel="stylesheet" type="text/css" href="css/beranda.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap"
        rel="stylesheet">
    </head>
    <body>
        <!-- bagian header -->
        <header>
            <h1><a href="beranda.php"> Admin Pendataan Karyawan </a></h1>
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="data-karyawan.php">Data Karyawan</a></li>
                <li><a href="keluar.php">Keluar</a></li>
                
            </ul>
        </header>

        <!-- bagian content -->
        <section class="content">
            <h2>Detail Data Karyawan</h2>
            <div class="box">
                <table class ="table-data" border="0">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>: </td>
                        <td></td>
                        <td><?php echo $p->nama ?></td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td>: </td>
                        <td></td>
                        <td><?php echo $p->nip ?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>: </td>
                        <td></td>
                        <td><?php echo $p->jabatan ?></td>
                    <tr>
                        <td>Tempat Tinggal</td>
                        <td>: </td>
                        <td></td>
                        <td><?php echo $p->alamat ?></td>
                    </tr>
                    <tr>
                        <td>No. HP/WA</td>
                        <td>: </td>
                        <td></td>
                        <td><?php echo $p->no_hp ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: </td>
                        <td></td>
                        <td><?php echo $p->email ?></td>
                    </tr>

                </table>
            </div>
        </section>
    </body>
</html>