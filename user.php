<!doctype html>
<html lang="en">

<head>
  <title>BANK JATENG SYARIAH | Beranda</title>
  <link rel="icon" type="image/png" href="img/logo/biru.jpg">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" href="css/manual/style.css">
  <link rel="stylesheet" type="text/css" href="css/style-enfold.css">
  <script src="js/manual/preloader.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600,300,700' rel='stylesheet' type='text/css'>
  <script>
    $(document).ready(function () {
      $(".preloader").fadeOut();
    })
  </script>
</head>

<body>
  <!--Pre Loader-->
  <div class="preloader">
    <div class="loading">
      <img src="img/aset/spiner.gif" width="80">
    </div>
  </div>
  <!--Navbar-->
  <hr class="bg-danger fw-bold fixed-top" style="height: 13px; margin: top 15px;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">.
      <a class="navbar-brand" href="index.php"><img src="img/logo/jateng.png" alt=""
          style="width:130px; height: auto; object-fit: contain;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fw-bold fs-5">
          <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="user.php"><i class="fas fa-home"></i>
              Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="informasibank.php"><i
                class="fas fa-info-circle"></i> Informasi Bank</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="proses-pengajuan.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1"/>
</svg> Pengajuan Bank</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-circle"></i> Akun
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item text-white" href="profile.php"><i class="fas fa-user-circle"></i> Profile</a>
              </li>
              <li><a class="dropdown-item text-white" href="logout.php"><i class="fas fa-sign-in-alt"></i> Logout</a>
              </li>
            </ul>
          </li>
          <!-- <a class="nav-link active text-white" aria-current="page" href="#">Beranda</a> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Carousel-->
  <style>
    .carousel-item {
      position: relative;
      height: 100vh;
      /* agar satu layar penuh */
    }

    .small-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 90%;
      object-fit: cover;
      filter: brightness(50%);
      z-index: 1;
    }

    .carousel-caption {
      z-index: 2;
      /* agar caption di atas video */
      position: relative;
    }
  </style>

  <div class="carousel-inner">
    <div class="carousel-item active" for="01">
      <video class="small-video bannerimg" autoplay muted loop>
        <source src="img/vidio/bank.mp4" type="video/mp4">
        Browser Anda tidak mendukung pemutaran video.
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Proses Pemilahan</h5>
        <p>Proses pemilahan lanjut oleh petugas bank sampah.</p>
      </div>
    </div>
  </div>

  </div>
  <!--konten2-->
  <div class="container-about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title-un">BANK JATENG SYARIAH</h3>
          <div class="title-un-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
              class="bi bi-bank" viewBox="0 0 16 16">
              <path
                d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z" />
            </svg></div>
          <p class="title-un-des" style="text-align: justify;">Bank Jateng Syariah adalah alternatif perbankan berbasis
            syariah dari bank daerah yang andal, legal, dan didukung jaringan luas serta berbagai produk tabungan dan
            pembiayaan sesuai prinsip Islam.
            Kalau kamu ingin tahu produk spesifik (tabungan, pembiayaan, syarat, suku bunga), atau lokasi cabang
            dekatmu, tinggal bilang ya</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title-un">CARA BERGABUNG BANK JATENG SYARIAH</h3>
          <div class="title-un-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
              class="bi bi-people-fill" viewBox="0 0 16 16">
              <path
                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
            </svg></div>
          <div class="title-un-des" style="text-align: justify;">Tahap Menjadi Nasabah Bank Jateng Syariah:
            <ol>
              <li>Siapkan Dokumen dan Setoran Awal
                Bawa KTP asli (dan fotokopi), NPWP (jika ada), serta setoran awal minimal Rp 50.000 sesuai jenis
                tabungan syariah yang dipilih.
              </li>
              <li>Kunjungi Kantor Cabang Terdekat
                Datangi cabang Bank Jateng Syariah terdekat. Petugas customer service akan membantu proses pembukaan
                rekening.
              </li>
              <li>Isi Formulir, Tandatangani Akad, dan Setor Dana
                Lengkapi formulir pembukaan rekening, tanda tangani akad syariah (seperti Wadiah atau Mudharabah), lalu
                setor dana ke rekening Anda.
              </li>
              <li>Terima Buku Tabungan & Kartu ATM
                Setelah proses selesai, Anda akan menerima buku tabungan dan kartu ATM yang dapat digunakan di jaringan
                Bank Jateng, ATM Bersama, dan Prima.
              </li>
              <li>Aktivasi Layanan Digital
                Anda dapat mengaktifkan layanan Bima Mobile (m-banking) dan Internet Banking untuk kemudahan transaksi
                online.
              </li>
              <li>Gunakan Layanan Syariah dengan Nyaman
                Nikmati berbagai layanan perbankan berbasis syariah seperti tabungan, pembiayaan, dan transaksi digital
                sesuai prinsip Islami.
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="asset/internal/js/index.js"></script>

  <!--konten maps-->
  <br>
  <div class="container-about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title-un">LOKASI BANK JATENG SYARIAH</h3>
          <div class="title-un-icon"><i class="fas fa-map-marked-alt"></i></div>
          <p class="title-un-des">
          <div class="embed-responsive embed-responsive-21by9 mt-3 ms-3">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7198331343693!2d110.85376097511174!3d-6.803897266545927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c527e26ffff9%3A0x38cf8819a70a82cf!2sBank%20Jateng%20KC%20Kudus!5e0!3m2!1sid!2sid!4v1750922174239!5m2!1sid!2sid"
              width="98%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--footer-->
  <br>
  <footer class="footer-distributed" style="width: 100%;">
    <div class="footer-left">

      <div class="logo">
        <img src="https://tse3.mm.bing.net/th/id/OIP.1KciaewoWj6E94x66mbz3wHaEL?pid=Api&P=0&h=180" alt=""
          style="width: 225px;">
      </div>
      <br>
      <p class="footer-company-about">
        <span>Bank Jateng Syariah <br>
          Direktorat Operasional dan Pelayanan Nasabah Syariah <br>
          Subdirektorat Pembiayaan, Tabungan dan Investasi Syariah
        </span>
      </p>
      <!-- <h3>BANK SAMPAH MLIRIPROWO</h3> -->
    </div>
    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Kudus</span> Jl.Simpang Tujuh.</p>
      </div>
      <div>
        <i class="fa fa-phone"></i>
        <p><a href="sms:(+62)85749469501">(+62)81222333444</a></p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:bank_mliriprowo@gmail.com">bankjatengsyariah@gmail.com</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>Kunjungi Sosial Media Kami!</span>
        Untuk yang ingin lebih dekat dengan Bank Jateng Syariah, silahkan kunjungi sosial media kami dibawah ini!
      </p>
      <div class="footer-icons">
        <a href="#" target="_blank"><i class="fab fa-instagram-square"></i></a>
        <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
      </div>
    </div>
  </footer>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>