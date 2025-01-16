<?php
include 'config.php';

$sql = "SELECT id, name, email, message, created_at FROM contacts ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query error: " . mysqli_error($conn));
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Portofolio | Khalisya Davina</title>
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
          <li class="nav-item">
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
  </section>

  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>About Me</h2>
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
  </section>

  <section id="experiences" class="py-5">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col">
        <h2 class="display-6">Experiences</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <ul class="list-group">
          <li class="list-group-item">PETA FTI 2024.</li>
          <li class="list-group-item">Lomba menari mewakili sekolah.</li>
          <li class="list-group-item">Lomba rabbana mewakili sekolah.</li>
        </ul>
      </div>
    </div>
  </div>
</section>


  <section id="gallery">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Gallery</h2>
        </div>
      </div>
      <div class="row">
        
        <?php 
        $gallery = [
          ['img' => 'pesawat.jpg', 'desc' => 'Berada di pesawat menuju Pontianak.'],
          ['img' => 'pantai.jpg', 'desc' => 'Berada di pantai watulawang.'],
          ['img' => 's3d.jpg', 'desc' => 'Kegiatan S3D yang dilaksanakan oleh FTI UII.'],
          ['img' => 'dieng.jpg', 'desc' => 'Sedang liburan di Dieng.'],
          ['img' => 'prambanan.jpg', 'desc' => 'Berada di Prambanan.'],
          ['img' => 'susur sungai.jpg', 'desc' => 'Sedang menaiki kapal bersama keluarga mengelilingi sungai kapuas.']
        ];
        foreach ($gallery as $item): ?>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="<?= $item['img']; ?>" class="card-img-top" alt="gallery">
            <div class="card-body">
              <p class="card-text"><?= $item['desc']; ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="social" class="py-5">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col">
        <h2 class="display-6">Social</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <a href="https://www.instagram.com/khaliisyaaa" target="_blank" class="btn btn-primary w-100 fw-bold py-2">
          Follow me on Instagram
        </a>
      </div>
    </div>
  </div>
</section>

  <section id="contact" class="py-5 bg-light">
  <div class="container">
    <div class="row text-center mb-5">
      <div class="col">
        <h2 class="display-5 fw-bold">Get in Touch</h2>
        <p class="text-muted">Feel free to drop us a message and we'll get back to you as soon as possible.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow border-0 rounded-4">
          <div class="card-body p-4">
            <form id="contactForm" method="POST">
              <div class="mb-4">
                <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                <div class="input-group">
                  <span class="input-group-text bg-primary text-white"><i class="bi bi-person-fill"></i></span>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required>
                </div>
              </div>
              <div class="mb-4">
                <label for="email" class="form-label fw-semibold">Email</label>
                <div class="input-group">
                  <span class="input-group-text bg-primary text-white"><i class="bi bi-envelope-fill"></i></span>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
                </div>
              </div>
              <div class="mb-4">
                <label for="pesan" class="form-label fw-semibold">Pesan</label>
                <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Tuliskan pesan Anda di sini" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100 fw-bold py-2">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <section id="pesanmasuk" class="py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h2 class="display-6">Pesan Masuk</h2>
                </div>
            </div>
            <div class="row">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <div class="col-md-6 mb-4">
                            <div class="card shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><?= htmlspecialchars($row['name']); ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($row['email']); ?></h6>
                                    <p class="card-text"><?= htmlspecialchars($row['message']); ?></p>
                                    <span class="badge bg-secondary"><?= htmlspecialchars($row['created_at']); ?></span>
                                    <div class="mt-3">
                                        <form action="edit_message.php" method="GET" class="d-inline">
                                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                                        </form>
                                        <form action="delete_message.php" method="POST" class="d-inline">
                                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p class="text-center">Tidak ada pesan yang masuk.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

  <footer style="background-color:#f7bfd9;" class="text-white text-center pb-5">
    <p>Created with love by <a href="https://www.instagram.com/khaliisyaaa" class="text-white fw-bold">Khalisya Davina</a></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
  document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    fetch('process_contact.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      alert('Pesan berhasil dikirim!');
      document.getElementById('contactForm').reset();
    })
    .catch(error => {
      alert('Terjadi kesalahan, silakan coba lagi.');
    });
  });
  </script>
  </body>
</html>

<?php
mysqli_close($conn);
?>
