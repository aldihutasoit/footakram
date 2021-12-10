<html>

<head>
    <title>Counter Pengunjung Website</title>
</head>

<body>
    <?php

    include "koneksi.php";
    $sql_hitung = mysqli_query($konek, "SELECT * FROM pengunjung1");
    while ($row = mysqli_fetch_array($sql_hitung)) {
        $jml_sekarang = $row['jumlahpengunjung'];
        $jml_baru = $jml_sekarang + 1;
        $update_banyak = mysqli_query($konek, "UPDATE pengunjung1 SET
jumlahpengunjung='$jml_baru'");
    }
    include_once 'header.php'
    ?>
    <div class="home">
        <div class="komentar">
            <center>
                <b>
                    Ada sebanyak <b> <?php echo $jml_baru; ?> </b> yang terlah mengunjungi website anda
                    <br> <br> <br>
                    Tekan F5 agar pengunjung website anda semakin banyak<br>
                    <br>
                </b>
                <div class="tombolkembali">
                    <a href="home.php"> <b> Back </b></a>
                </div>
            </center>
        </div>
    </div>

</body>

</html>