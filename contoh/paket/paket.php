<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>

<body>
    <section class="page-section bg-dark" id="home">
        <div class="container">
            <h2 class="text-center">Tour Packages</h2>
            <div class="d-flex w-100 justify-content-center">
                <hr class="border-warning" style="border:3px solid" width="15%">
            </div>
            <div class="row">
                <?php
                require "../../database/koneksi.php";

                $query = "SELECT * FROM packages";
                $result = $koneksi->query($query);

                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-md-6">
                        <div class="card rounded-0">
                            <!-- <img class="card-img-top" src="<?php echo $gambar ?>" alt="<?php echo $row['title'] ?>" height="200rem" style="object-fit:cover"> -->
                            <div class="card-body">
                                <h5 class="card-title truncate-1"><?php echo $row['title'] ?></h5>
                                <p class="card-text truncate"><?php echo $_SESSION['destinasi'] ?></p>
                                <p class="card-text truncate"><?php echo $row['description'] ?></p>
                                <div class="w-100 d-flex justify-content-end">
                                    <a href="" class="btn btn-sm btn-flat btn-warning"><?php echo $row['cost'] ?><i class="fa fa-arrow-right"></i></a><br>
                                    <a href="../../contoh/pesan.html" class="btn btn-sm btn-flat btn-warning">Pesan <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>
