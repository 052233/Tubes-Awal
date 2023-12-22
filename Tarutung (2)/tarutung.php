<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarutung</title>
    <link rel="icon" href="IMG/4439008185_6ba8391b10_b.jpg">
    <link rel="stylesheet" href="tarutung.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
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
    </nav>
    <section class="home" id="home">
        <div class="home-text">
        <h1>T A R U T U N G</h1>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="IMG/1.jpg" alt="">
        </div>
        <div class="about-text">
            <h5>Latar Belakang</h5>
            <h2>Tarutung</h2>
            <p align="justify">Tarutung adalah ibu kota Kabupaten Tapanuli Utara yang sekaligus menjadi pusat pemerintahan dan perekonomian dari Kabupaten Tapanuli Utara. <br>
                Kota Tarutung merupakan kecamatan yang memiliki luas wilayah terkecil tetapi memiliki kepadatan penduduk tertinggi di Kabupaten Tapanuli Utara.[1]

                Tarutung juga dikenal sebagai kota wisata rohani di mana di kota tersebut berdiri bangunan salib megah yang dinamai Salib Kasih.</p>
            <div class="rating">
                <div class="col">
                    <h4>Iklim</h4>
                    <p>iklim yang sejuk dan segar, dengan suhu rata-rata 18-25 derajat Celcius</p>
                </div>
                <div class="col">
                    <h4>Budaya</h4>
                    <p>Di kota ini terdapat berbagai museum dan galeri seni yang menampilkan budaya Batak.</p>
                </div>
                <div class="col">
                    <h4>Kopi</h4>
                    <p>Kopi Tarutung memiliki cita rasa yang khas dan telah diakui oleh dunia internasional.</p>
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
                <img src="IMG/air soda.jpg" alt="">
                <h4>Pemandian Air Soda Parbubu</h4>
                <div class="overlay">
                    <div class="content">
                        <h3 style="color:white">
                            Pemandian ini terkenal dengan airnya yang berwarna merah dan berbuih seperti soda. Airnya mengandung belerang dan dipercaya memiliki khasiat untuk menyembuhkan berbagai penyakit kulit.
                        </h3>
                    </div>
                </div>
            </div>
            </div>
            <div class="activity-content">
            <div class="box">
                <img src="IMG/batu.jpg" alt="">
                <h4>Situs Batu Siallagan</h4>
                <div class="overlay">
                    <div class="content">
                        <h3>
                            Situs ini merupakan peninggalan sejarah dari Kerajaan Siallagan yang pernah berkuasa di Tarutung pada abad ke-17. Situs ini terdiri dari beberapa batu besar yang disusun membentuk sebuah bangunan.
                        </h3>
                    </div>
                </div>
            </div>
            </div>
            <div class="activity-content">
            <div class="box">
                <img src="IMG/gereja.jpg" alt="">
                <h4>Gereja HKBP Sion Tarutung</h4>
                <div class="overlay">
                    <div class="content">
                        <h3>
                            Gereja ini merupakan salah satu gereja tertua di Indonesia yang dibangun pada tahun 1861. Gereja ini memiliki arsitektur yang unik dan merupakan salah satu ikon kota Tarutung.
                        </h3>
                    </div>
                </div>
            </div>
            </div>
            <div class="activity-content">
            <div class="box">
                <img src="IMG/taman.jpg" alt="">
                <h4>Taman Wisata Alam Lumban Suhi Suhi</h4>
                <div class="overlay">
                    <div class="content">
                        <h3>
                            Taman wisata ini terletak di kaki Gunung Pusuk Buhit, salah satu gunung tertinggi di Sumatera Utara. Taman ini memiliki pemandangan alam yang indah dan menawarkan berbagai kegiatan wisata, seperti hiking, berkemah, dan berendam di air panas.
                        </h3>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </section>
    <div class="tiket" id="pesan">
        <a href="pesanTarutung.php"><button>Pesan Sekarang ----></button></a>
    </div>
<script src="tarutung.js"></script>
</body>
</html>