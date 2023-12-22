<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travel</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
  <nav>
    <div class="layar-dalam">
      <div class="menu">
        <ul class="user">

        </ul>
      </div>
      <div class="logo">
        <a href=""><img src="3(2).png" class="putih" /></a>
        <a href=""><img src="3(2).png" class="hitam" /></a>
      </div>
      <div class="menu">
        <a href="#" class="tombol-menu">
          <span class="garis"></span>
          <span class="garis"></span>
          <span class="garis"></span>
        </a>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#aboutus">AboutUs</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#wisata">Wisata</a></li>
          <?php
          require "../login/koneksi.php";
          if (empty($_SESSION['username'])) {
            echo '
              <li><a href="register.php">Daftar</a></li>
              <li><a href="login.php">Login</a></li>';
          } else {
            echo "<li>";
            echo "<a href='../login/logout.php'>Logout</a>";
            echo "</li>";
            if ($_SESSION['role'] == "admin") {
              echo "<li><a href='../manage'>Manage</a></li>";
            }
            echo "<li><div class='vertical-line'></div></li>";
            echo "<li><b><a href='riwayat.php'><img class='img rounded-circle ' src='images.jpg'/>  ";
            echo $_SESSION['username'];
            echo "</a></b></li>";
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <div class="layar-penuh">
    <header id="home">
      <div class="overlay"></div>
      <video autoplay muted loop>
        <source src="../y2mate.com - Sunset gunung prau story wa 30 detik_720p.mp4" type="video/mp4" />
      </video>
      <div class="intro">
        <h3>Visit Sumatera Utara</h3>
        <p>
          Pernahkah Anda melihat Sumatera Utara lebih jauh lagi?
        </p>
        <p>
          <a href="#aboutus" class="tombol">MORE INFO</a>
        </p>
      </div>
    </header>
    <main>
      <section id="aboutus">
        <div class="layar-dalam">
          <h3>About Us</h3>
          <p class="ringkasan">

          </p>
          <div class="konten-isi">
            <p>
              Website ini akan membantu Anda menemukan tempat wisata <br>terbaik di Sumatera Utara.
            </p>
          </div>
        </div>
      </section>

      <section id="gallery">
        <div><img src="download.jpg" /></div>
        <div><img src="2.jpg" /></div>
        <div><img src="3.jpg" /></div>
        <div><img src="4.jpg" /></div>
        <div><img src="5.jpg" /></div>
        <div><img src="6.jpg" /></div>
        <div><img src="7.jpg" /></div>
        <div><img src="8.jpg" /></div>
      </section>
      <section class="quote">
        <div class="layar-dalam">
          <p><q>Danau Toba, bapak kaldera dunia.</q></p>
        </div>
      </section>
      <section id="team">
        <div class="layar-dalam">
          <h3>Our Team</h3>
          <p class="ringkasan">

          </p>
          <div class="tim">
            <div>
              <img src="asset/tim1.jpg" />
              <h6>Raswan Haqqi</h6>
              <span>Indonesia</span>
            </div>
            <div>
              <img src="asset/tim2.jpg" />
              <h6>Basirun Siregar</h6>
              <span>Indonesia</span>
            </div>
            <div>
              <img src="asset/tim3.jpg" />
              <h6>Zoya Indah</h6>
              <span>Indonesia</span>
            </div>
            <div>
              <img src="asset/tim3.jpg" />
              <h6>Ari Gamaliel</h6>
              <span>Indonesia</span>
            </div>
            <div>
              <img src="asset/tim3.jpg" />
              <h6>Finorosa Tabitha</h6>
              <span>Indonesia</span>
            </div>
            <div>
              <img src="asset/tim3.jpg" />
              <h6>Nicholas Ken</h6>
              <span>Indonesia</span>
            </div>
          </div>
        </div>
      </section>
      <section class="abuabu" id="blog">
        <div class="layar-dalam">
          <h3>Recommended</h3>
          <p class="ringkasan">
            Tempat yang sangat populer di Sumatera Utara.
          </p>
          <div class="blog">
            <div class="area">
              <div class="gambar" style="background-image: url('../logo1.jpg')"></div>
              <div class="text">
                <article>
                  <h4><a href="#">What About Danau Toba?</a></h4>
                  <p>
                    Danau Toba menjadi tempat yang sempurna untuk bersantai, karena udaranya sangat sejuk dan suasananya pun amat tenang. Tentu saja, sebab letak Danau Toba berada di 900 meter di atas permukaan laut. Selain panorama danau yang memukau, Sobat Pesona juga akan disuguhkan keindahan pemandangan deretan pegunungan dan pepohonan hijau yang menyegarkan mata. Pokoknya, cocok jadi tempat untuk melepas penat, deh!
                  </p>
                </article>
              </div>
            </div>
            <div class="area">
              <div class="gambar" style="background-image: url('11.jpg')"></div>
              <div class="text">
                <article>
                  <h4><a href="#">What About Medan?</a></h4>
                  <p>
                    Medan menjadi salah satu kota di Pulau Sumatera yang memiliki banyak tempat wisata yang indah dan memukau. Keindahannya mewakili eksotisme tanah Sumatra. Kota Medan yang dikenal dengan Danau Toba ini menawarkan tempat wisata unik yang berbeda dari yang lain. Identitas kota Medan tercermin dari kekayaan alam dan budayanya. jelajahi kota Medan dan temukan wisata populer disekitarnya.
                  </p>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="abuabu1" id="wisata">
        <div class="layar-dalam">
          <h3>Wisata</h3>
          <div class="card1">
            <div class="card">
              <a href="../medan/tubes.php"><img src="medan2.jpg" alt="medan">
                <h2 class="card-title">Medan</h2>
              </a>
            </div>
            <div class="card">
              <a href="../Gunung Sibayak/tubesraswan.php"><img src="4439008185_6ba8391b10_b.jpg" alt="Sibayak">
                <h2 class="card-title">Gunung Sibayak</h2>
              </a>
            </div>
            <div class="card">
              <a href="../Sibolangit/sibolangit.php"><img src="langit.jpg" alt="Sibolangit">
                <h2 class="card-title">Sibolangit</h2>
              </a>
            </div>
            <div class="card">
              <a href="../Tarutung (2)/tarutung.php"><img src="../Tarutung (2)/IMG/2.jpg" alt="medan">
                <h2 class="card-title">Tarutung</h2>
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer id="contact">
      <div class="layar-dalam">
        <div>
          <h5>Info</h5>
          <section class="page-section" id="contact">
            <div class="container">
              <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Send us a message for inquiries.</h3>
              </div>
              <!-- * * * * * * * * * * * * * * *-->
              <!-- * * SB Forms Contact Form * *-->
              <!-- * * * * * * * * * * * * * * *-->
              <!-- This form is pre-integrated with SB Forms.-->
              <!-- To make this form functional, sign up at-->
              <!-- https://startbootstrap.com/solution/contact-forms-->
              <!-- to get an API token!-->
              <form id="contactForm">
                <div class="row align-items-stretch mb-5">
                  <div class="col-md-6">
                    <div class="form-group">
                      <!-- Name input-->
                      <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required />
                    </div>
                    <div class="form-group">
                      <!-- Email address input-->
                      <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                    </div>
                    <div class="form-group mb-md-0">
                      <input class="form-control" id="subject" name="subject" type="subject" placeholder="Subject *" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                      <!-- Message input-->
                      <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
              </form>
            </div>
          </section>
        </div>

      </div>
      <div class="layar-dalam">
        <div class="copyright">&copy; 2023 Kelompok 6 KOM C</div>
      </div>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="index.js"></script>
  <script src="../js/jquery-3.7.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>