<html>

<head>
    <title>Komentar pengunjung</title>
</head>

<body>
    <?php
    include_once 'header.php';
    include "koneksi.php";
    $result = mysqli_query($konek, "select * from komentar order by id DESC");
    while ($data = mysqli_fetch_array($result)) {

        echo "&nbsp &nbsp<hr/>";
        echo "<b> &nbsp &nbsp$data[1]</b><br>";
        echo "  &nbsp &nbsp email : <i>$data[2]</i><br>";
        echo "&nbsp &nbsp $data[3]<br>";
    }
    ?>
    <div class="tombolkembali">
        <br> <br> <br>
        <center>
            <a href="home.php">KLIK DISINI UNTUK KEMBALI</a>
        </center>
    </div>

</body>

</html>