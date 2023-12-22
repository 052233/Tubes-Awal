<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Destinasi Wisata Danau Toba</title>
</head>
<body>
    <header>
    <?php
    require"koneksi.php";
    if(empty($_SESSION['email'])){
        echo'<a href="login.php"><button class="btn btn-success float-end">Log in</button></a>';
        echo'<a href="register.php"><button class="btn btn-primary float-end">Register</button></a>';
    }
    else{
        if($_SESSION['role']=="admin"){
            echo"<a href='manage'><button class='btn btn-primary float-end'>Manage Web</button></a>";
        }
        echo'<a href="logout.php"><button class="btn btn-danger float-end mr-5">Logout</button></a>';
    }
    ?>
        <div class="d-inline-flex">
        <h1 class="header-title page-header absolute-top">Wisata Danau Toba</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#attractions">Attractions</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="home-section">
        <h2>Selamat Datang di Danau Toba</h2>
        <p>Temukan keindahan alam dan budaya yang menakjubkan.</p>
    </section>

    <section id="about" class="about-section">
        <h2>Tentang Danau Toba</h2>
        <p>Danau Toba adalah danau vulkanik terbesar di dunia dan merupakan tempat wisata yang populer di Indonesia.</p>
    </section>

    <section id="attractions" class="attractions-section">
        <h2>Objek Wisata</h2><br>
        <div class="attraction">
            <img src="attraction1.jpg" alt="Attraction 1">
            <h3>Waterfall Sipisopiso</h3>
            <p>Salah satu air terjun tertinggi di Indonesia.</p>
        </div>
        <div class="attraction">
            <img src="attraction2.jpg" alt="Attraction 2">
            <h3>Pulau Samosir</h3>
            <p>Pulau yang terletak di tengah Danau Toba dengan keindahan alam yang luar biasa.</p>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <h2>Hubungi Kami</h2>
    </section>

</body>
</html>
    