<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <link rel="stylesheet" href="style.css">

    <title>portofolio | Khalisya Davina</title>
  </head>
  <body id="home">
   <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: #f7bfd9;">
    <div class="container">
      <a class="navbar-brand" href="#">Khalisya Davina</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experiences">Experiences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#social">Social</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li>
            <a class="nav-link" href="#pesanmasuk">Pesan Masuk</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>

    <section class="jumbotron text-center">
      <img src="saya.jpg" alt="Khalisya Davina" width="200" class="rounded-circle img-thumbnail"/>
      <h1 class="display-4">Khalisya Davina</h1>
      <p class="lead">Mahasiswa jurusan Informatika</p>
      <p class="lead">Universitas Islam Indonesia</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L0,32L80,32L80,96L160,96L160,96L240,96L240,224L320,224L320,288L400,288L400,288L480,288L480,64L560,64L560,32L640,32L640,288L720,288L720,160L800,160L800,288L880,288L880,64L960,64L960,160L1040,160L1040,64L1120,64L1120,64L1200,64L1200,96L1280,96L1280,224L1360,224L1360,288L1440,288L1440,320L1360,320L1360,320L1280,320L1280,320L1200,320L1200,320L1120,320L1120,320L1040,320L1040,320L960,320L960,320L880,320L880,320L800,320L800,320L720,320L720,320L640,320L640,320L560,320L560,320L480,320L480,320L400,320L400,320L320,320L320,320L240,320L240,320L160,320L160,320L80,320L80,320L0,320L0,320Z"></path></svg>
    </section>

     <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-3">
            <p>Nama saya Khalisya Davina, saya berasal dari kota Pontianak provinsi Kalimantan Barat</p>
          </div>
          <div class="col-md-3">
            <p>Riwayat Pendidikan saya pernah bersekolah di SDIT Arafah Sampit, SMPIT Arafah Sampit, dan SMAN 1 Sampit.</p>
          </div>
          <div class="col-md-3">
            <p>Hobi saya mendengarkan musik, jalan-jalan, dan bermain game.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f7bfd9" fill-opacity="1" d="M0,288L0,192L80,192L80,160L160,160L160,128L240,128L240,224L320,224L320,224L400,224L400,288L480,288L480,256L560,256L560,32L640,32L640,96L720,96L720,320L800,320L800,128L880,128L880,256L960,256L960,96L1040,96L1040,192L1120,192L1120,0L1200,0L1200,0L1280,0L1280,64L1360,64L1360,128L1440,128L1440,320L1360,320L1360,320L1280,320L1280,320L1200,320L1200,320L1120,320L1120,320L1040,320L1040,320L960,320L960,320L880,320L880,320L800,320L800,320L720,320L720,320L640,320L640,320L560,320L560,320L480,320L480,320L400,320L400,320L320,320L320,320L240,320L240,320L160,320L160,320L80,320L80,320L0,320L0,320Z"></path></svg>
     </section>
 

     <section id="gallery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Gallery</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="pesawat.jpg" class="card-img-top" alt="gallery">
              <div class="card-body">
                <p class="card-text">Berada di pesawat menuju Pontianak.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="pantai.jpg" class="card-img-top" alt="gallery">
              <div class="card-body">
                <p class="card-text">Berada di pantai watulawang.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="s3d.jpg" class="card-img-top" alt="gallery">
              <div class="card-body">
                <p class="card-text">Kegiatan S3D yang dilaksanakan oleh FTI UII.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="dieng.jpg" class="card-img-top" alt="gallery">
              <div class="card-body">
                <p class="card-text">Sedang liburan di Dieng.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="prambanan.jpg" class="card-img-top" alt="gallery">
              <div class="card-body">
                <p class="card-text">Berada di Prambanan.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="susur sungai.jpg" class="card-img-top" alt="gallery">
              <div class="card-body">
                <p class="card-text">Sedang menaiki kapal bersama keluarga mengelilingi sungai kapuas.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L0,64L80,64L80,320L160,320L160,32L240,32L240,32L320,32L320,32L400,32L400,288L480,288L480,96L560,96L560,96L640,96L640,256L720,256L720,0L800,0L800,64L880,64L880,96L960,96L960,224L1040,224L1040,32L1120,32L1120,0L1200,0L1200,160L1280,160L1280,32L1360,32L1360,128L1440,128L1440,320L1360,320L1360,320L1280,320L1280,320L1200,320L1200,320L1120,320L1120,320L1040,320L1040,320L960,320L960,320L880,320L880,320L800,320L800,320L720,320L720,320L640,320L640,320L560,320L560,320L480,320L480,320L400,320L400,320L320,320L320,320L240,320L240,320L160,320L160,320L80,320L80,320L0,320L0,320Z"></path></svg>
     </section>

     <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="process_contact.php" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f7bfd9" fill-opacity="1" d="M0,64L0,320L80,320L80,64L160,64L160,192L240,192L240,160L320,160L320,288L400,288L400,128L480,128L480,192L560,192L560,224L640,224L640,320L720,320L720,192L800,192L800,288L880,288L880,224L960,224L960,32L1040,32L1040,256L1120,256L1120,0L1200,0L1200,32L1280,32L1280,32L1360,32L1360,320L1440,320L1440,320L1360,320L1360,320L1280,320L1280,320L1200,320L1200,320L1120,320L1120,320L1040,320L1040,320L960,320L960,320L880,320L880,320L800,320L800,320L720,320L720,320L640,320L640,320L560,320L560,320L480,320L480,320L400,320L400,320L320,320L320,320L240,320L240,320L160,320L160,320L80,320L80,320L0,320L0,320Z"></path></svg>
     </section>

      <footer style="background-color:#f7bfd9;" class="text-white text-center pb-5">
        <p>Created with love by <a href="https://www.instagram.com/khaliisyaaa" class="text-white fw-bold">Khalisya Davina</a></p>
      </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>