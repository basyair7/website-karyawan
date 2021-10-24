<?php
    include 'koneksi.php';

    if(isset($_GET['nim'])){
        $nim_data = $_GET['nim'];
        $delete = mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE nim = '".$nim_data."' ");

        echo '<script>window.location="data-mhs.php"</script>';
    }
?>