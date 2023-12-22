<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunung Sibayak</title>
    <link rel="icon" href="IMG/4439008185_6ba8391b10_b.jpg">

    <link rel="stylesheet" href="raswan.css">
    <link rel="stylesheet" href="tubesraswan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <div class="layar-dalam">
          <div class="logo">
            <a href=""><img src="asset/logo-white.png" class="putih" /></a>
            <a href=""><img src="asset/logo-black.png" class="hitam" /></a>
          </div>
          <div class="menu">
            <a href="#" class="tombol-menu">
              <span class="garis"></span>
              <span class="garis"></span>
              <span class="garis"></span>
            </a>
            <ul>
                <li><a href="../contoh/index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#dest">Destinasi</a></li>
                <li><a href="#pesan">Pesan</a></li>
                <li><a href="#contact">Contact</a></li>
                <?php
                require "../login/koneksi.php";
                 if(empty($_SESSION['username'])){
                  echo'
                  <li><a href="register.php">Daftar</a></li>
                  <li><a href="login.php">Login</a></li>';
                 }
                 else {
                   echo "<li>" ;
                   echo "<a href='../login/logout.php'>Logout</a>";
                   echo "</li>";
                   if($_SESSION['role']=="admin"){
                     echo"<li><a href='../login/manage'>Manage</a></li>";
                    }
                    echo "<li><b><a><img class='img rounded-circle' src='../contoh/images.jpg'/>  " ;
                    echo $_SESSION['username'];
                    echo "</a></b></li>";
                 }
                ?>
              </ul>
          </div>
        </div>
      </nav>
    <section class="home" id="home">
        <div class="home-text">
        <h1>G  U  N  U  N  G <br> S I B A Y A K</h1>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="IMG/22802213_920132838138760_9099101891198976000_n-1024x683.webp" alt="">
            <div class="rating" id="rating">
                <span class="star" data-value="1">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="5">&#9733;</span>
                <button type="submit"class="ras"><a>Button</a></button>
                
            </div>
        </div>
        <div class="about-text">
            <h5>Latar Belakang</h5>
            <h2>Gunung Sibayak</h2>
            <p align="justify">Gunung Sibayak adalah sebuah gunung di Kabupaten Karo, Sumatera Utara. Masyarakat Karo menyebut gunung Sibayak dengan sebutan "gunung raja".
                Gunung Sibayak merupakan gunung berapi dan terakhir meletus tahun 1881. Gunung ini berada di sekitar 50 kilometer barat daya Kota Medan. <br><br>
                Gunung Sibayak merupakan gunung yang paling banyak dikunjungi dan paling popular di sumatra utara karena akses menuju gunung sibayak yang mudah,
                ada tiga akses pendakian mulai desa jaranguda (jalur wisata), sidebuk 2 (semangat gunung), jalur 54 (penatapan). Jalur wisata adalah jalur yang paling direkomendasikan karena paling dekat, aman, dan singkat.
                Ada 2 tempat parkir kendaraan di jalur wisata</p>
            <div class="rating">
                <div class="col">
                    <h4>Tinggi</h4>
                    <p>2.181 mdpl</p>
                </div>
                <div class="col">
                    <h4>Julukan</h4>
                    <p>Dikenal dengan 'Gunung Raja'</p>
                </div>
                <div class="col">
                    <h4>Favorit</h4>
                    <p>Salah satu gunung terfavorit di indonesia</p>
                </div>
            </div>
        </div>
    </section>

    <section class="activity" id="dest">
        <div class="center-text">
            <h2>Destinasi Wisata</h2>
        </div>
        <div class="activities-content">
        <div class="activity-content">
            <div class="box">
                <img src="IMG/64b8a9b619d88.png" alt="">
                <h4>Mikie Funland</h4>
                <div class="overlay">
                    <div class="content">
                        <h3 style="color:white">
                            Arena rekreasi keluarga dan teman teman anda. Sebagai taman hiburan keluarga yang pertama di Sumatera Utara 
                            dengan pilihan lebih dari 35 macam wahana yang dapat dinikmati seharian dengan hanya menggunakan satu tiket saja.
                        </h3>
                    </div>
                </div>
            </div>
            </div>
            <div class="activity-content">
            <div class="box">
                <img src="IMG/IMG-20220510-WA0026.jpg" alt="">
                <h4>Pemandian Air Panas Pariban</h4>
                <div class="overlay">
                    <div class="content">
                        <h3>
                            Pemandian Air Panas Pariban memiliki area yang lapang sebagai wisata pemandian air panas alami.
                            Selain itu, keadaan alamnya yang masih asri dan tenang sangat cocok untuk dijadikan sebagai tempat untuk merilekskan diri.
                        </h3>
                    </div>
                </div>
            </div>
            </div>
            <div class="activity-content">
            <div class="box">
                <img src="IMG/982066708.jpg" alt="">
                <h4>Replika Pagoda Shwedagon</h4>
                <div class="overlay">
                    <div class="content">
                        <h3>
                            Pagoda yang ada di Taman Alam Lumbini ini merupakan replika tertinggi kedua setelah yang ada di Burma.
                            Pagoda ini merupakan yang termegah dan tertinggi di Indonesia sehingga meraih rekor Museum Rekor Indonesia (MURI).
                        </h3>
                    </div>
                </div>
            </div>
            </div>
            <div class="activity-content">
            <div class="box">
                <img src="IMG/2022-10-05_8549.jpg" alt="">
                <h4>Museum Pusaka Karo</h4>
                <div class="overlay">
                    <div class="content">
                        <h3>
                            Museum Pusaka Karo adalah salah satu museum di Sumatera Utara, Indonesia yang menyimpan koleksi barang-barang pusaka masyarakat Karo.
                            Museum ini didirikan oleh misionaris Kapusin Belanda bernama Leonardus Egidius Joosten.
                        </h3>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <div class="tiket" id="pesan">
        <a href="pesanSibayak.php"><button>Pesan Sekarang ----></button></a>
    </div>
<script src="sibayak.js"></script>
<p id="selected-rating"></p>
<script src="script.js"></script>
</body>
</html>