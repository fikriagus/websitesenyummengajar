<?php
    include("connection.php");
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- Mobile Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Senyum Mengajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- logo -->
    <link href="image/logo.png" rel="icon" />
</head>

<body>
    <!-- Banner -->
    <div class="container-fluid p-1">
        <video playsinline autoplay muted loop style="
          margin: 0px;
          width: 100%;
          height: 100%;
          display: block;
          background-color: #fff;
        ">
        <source src="video/video-1.mp4" type="video/mp4" />
      </video>
        <!-- <img class="w-100 align-items-center" src="image/carousel-1.jpg" alt="Image"> -->
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-lg-1" style="max-width: 800px">
                <h3 class="display-5 mb-5 md-5 text-uppercase" style="letter-spacing: 5px; color: rgb(184, 219, 255)">
                    <b>Senyum Mengajar</b>
                </h3>
                <h1 class="display-3 text-light mb-5 md-4" style="letter-spacing: 3px">
                    <b>Dari Kita Untuk Masa Depan Mereka</b>
                </h1>

                <div class="container mt-3">
                    <p style="color: rgb(200, 227, 255)">
                        Masukkan Email dan Password Dengan Benar:
                    </p>
                    <form action="userlog.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
        <div class="form-login mb-1 mt-3">
            <label class="form-label"></label>
            <input type="text" class="form-control" placeholder="Username"  name="uname">
        </div>
        <div  iv class="form-login mb-3">
            <label class="form-label"></label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div><br>
            <i>belum memiliki akun?
                <a class="form-link" href="registrasi.php">cara registrasi</a>
            </i><br>
            <p class="pt-2"><input type="submit" class="tmblgn btn-primary" value="Login">
        </form>
                    <form>
                        <div class="row">
                            <div class="col">
                                <input type="text " class="form-control" placeholder="Masukkan Username " name="email " />
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Masukkan password " name="pswd " />
                            </div>
                        </div>
                    </form>
                    <a class="btn btn-primary py-md-3 px-md-5 mt-2">Masuk</a
            >

            <a href="registrasi.html" class="btn btn-light py-md-3 px-md-5 mt-2"
              >Daftar</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Banner -->
  </body>
</html>