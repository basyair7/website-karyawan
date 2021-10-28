<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Website Pendataan Karyawan | Administrator </title>
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
                <li<a href="#input-data.php">Input Data Baru</a></li>
                <li><a href="keluar.php">Keluar</a></li>
                
            </ul>
        </header>

        <!-- bagian content -->
        <section class="content">
            <h2>Data Mahasiswa</h2>
            <div class="box">
                <table class="table" border="10">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Tempat Tinggal</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $list_data = mysqli_query($conn, "SELECT * FROM 
                                tb_pendataan");
                            
                            while ($row = mysqli_fetch_array($list_data)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['nip'] ?></td>
                            <td><?php echo $row['jabatan'] ?></td>
                            <td><?php echo $row['alamat'] ?></td>
                            <td>
                                <a href="detail-karyawan.php?nip=<?php echo $row['nip'] ?>">Detail</a> ||
                                <a href="edit-data.php?nip=<?php echo $row['nip'] ?>"> Edit </a> || 
                                <a href="hapus-data.php?nip=<?php echo $row['nip']
                                ?>" onclick="return confirm('Yakin data akan dihapus?')">Hapus</a>
                                
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </body>
</html>
