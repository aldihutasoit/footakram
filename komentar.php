    <?php
    include_once 'header.php'
    ?>
    <section? class="home">
        <div class="komentar">
            <div class="komentar1">
                <center>
                    <b>
                        Setelah membaca website saya, tolong isikan komentar anda: <br>
                        <form action="komentar2.php" method="POST"> <br>
                            Nama anda : <input type="text" name="kotak1"> <br>
                            Email anda : <input type="text" name="kotak2"> <br> <br>
                            <textarea rows="4" cols="40" name="kotak3">
                        ISI KOMENTAR ANDA DISINI
                            </textarea>
                    </b>
                    <br><br>
                    <input type="submit" value="Kirim">
                    <input type="reset" value="Batal">
                    </form>
                    <br>
                    <br>
                    <a href="isikomentar.php"><b>Klik untuk Melihat Komentar</b></a>

                </center>
            </div>
        </div>
        </section>