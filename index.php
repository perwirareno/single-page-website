<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Tokopaedi - Platform Belanja Online Indonesia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/cart-green.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Slick -->
    <link rel="stylesheet" href="lib/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="lib/slick-1.8.1/slick/slick-theme.css">

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-map-marker-alt text-primary me-2"></small>
            <small>Lenteng Agung, Jakarta Selatan</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center py-3">
            <small class="far fa-clock text-primary me-2"></small>
            <small>24 Jam</small>
          </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-phone-alt text-primary me-2"></small>
            <small>(+62)21123456</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center">
            <a class="btn btn-sm-square bg-white text-primary me-1" href="https://wa.me/6282113182508" target="_blank"
              ><i class="fab fa-whatsapp"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.linkedin.com/in/perwirareno/" target="_blank"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/perwirareno/" target="_blank"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="img/tokopaedi.jpg" alt="Icon" />
        <h1 class="m-0 text-primary">Tokopaedi</h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="" class="nav-item nav-link active">Beranda</a>
          <a href="" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#modal-cari">Cari</a>
          <a href="#mengapa-kami" class="nav-item nav-link">Mengapa Kami</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Tentang Kami</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="#berita" class="dropdown-item">Berita</a>
              <a href="#visimisi" class="dropdown-item">Visi & Misi</a>
              <a href="#testimoni" class="dropdown-item">Testimoni</a>
            </div>
          </div>
        </div>
        <a href="" class="btn btn-primary"
          >Download Sekarang<i class="fa fa-mobile-alt ms-3"></i
        ></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
      <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
          <div
            class="header-bg h-100 d-flex flex-column justify-content-center p-5"
          >
            <h1 class="display-4 text-light mb-5">
              Nikmati layanan belanja online hanya di Tokopaedi
            </h1>
            <div class="d-flex align-items-center pt-4 animated slideInDown">
              <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5"
                >Buka lebih lanjut</a
              >
              <button
                type="button"
                class="btn-play"
                data-bs-toggle="modal"
                data-src="https://www.youtube.com/embed/H5pFhZrhR04"
                data-bs-target="#videoModal"
              >
                <span></span>
              </button>
              <h6 class="text-white m-0 ms-4 d-none d-sm-block">Tonton Video</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="slick-carousel header-carousel">
            <div class="slick-carousel-item">
              <img class="img-fluid" src="img/carousel-1.jpg" alt="" />
            </div>
            <div class="slick-carousel-item">
              <img class="img-fluid" src="img/carousel-2.jpg" alt="" />
            </div>
            <div class="slick-carousel-item">
              <img class="img-fluid" src="img/carousel-3.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Video Modal Start -->
    <div
      class="modal modal-video fade"
      id="videoModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- 16:9 aspect ratio -->
            <div class="ratio ratio-16x9">
              <iframe
                class="embed-responsive-item"
                src=""
                id="video"
                allowfullscreen
                allowscriptaccess="always"
                allow="autoplay"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Video Modal End -->

    <!-- About Start -->
    <div class="container-xxl py-5" id="mengapa-kami">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <br><br>
            <h1 class="display-5 mb-4">
              Mengapa anda harus belanja di
              <span class="text-primary">Tokopaedi</span>?
            </h1>
            <p class="mb-4">
              Tokopaedi sudah berdiri sejak puluhan tahun yang lalu dan telah
              membantu menggerakan roda ekonomi dan bisnis di Indonesia.
            </p>
            <h5 class="mb-3">
              <i class="far fa-check-circle text-primary me-3"></i>Harga murah
            </h5>
            <h5 class="mb-3">
              <i class="far fa-check-circle text-primary me-3"></i>Kualitas barang terjamin
            </h5>
            <h5 class="mb-3">
              <i class="far fa-check-circle text-primary me-3"></i>Buka selama 24 jam
            </h5>
            <h5 class="mb-3">
              <i class="far fa-check-circle text-primary me-3"></i>Dipercaya oleh mitra UMKM
            </h5>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <img class="img-fluid" src="img/tokopaedi.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div
      class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-4">
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.1s"
          >
            <i class="fa fa-envelope fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">69.420</h1>
            <p class="text-white mb-0">Pengiriman Barang</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <i class="fa fa-users fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">82.500</h1>
            <p class="text-white mb-0">Total Pengguna UMKM</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <i class="fa fa-map-marker-alt fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">34</h1>
            <p class="text-white mb-0">Tersebar di seluruh provinsi</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.7s"
          >
            <i class="fa fa-mobile-alt fa-3x text-primary mb-3"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">128.000</h1>
            <p class="text-white mb-0">Didownload oleh pengguna</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Berita Start -->
    <div class="container-xxl py-5" id="berita">
      <div class="container">
        <br><br>
        <div
          class="row g-5 mb-5 align-items-end wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="col-lg-6">
            <h1 class="display-5 mb-0">
              Berita di
              <span class="text-primary">Tokopaedi</span>
            </h1>
          </div>
        </div>
        <div class="row g-4">
          <div class="slick-carousel berita-carousel">
            <div class="slick-carousel-item col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="card">
                <img class="img-fluid card-img-berita" src="img/berita-1.jpg" alt="" />
                  <div class="card-body">
                    <b>Inflasi 2022 di Indonesia</b>
                  </div>
                  <div class="card-body">
                    Inflasi di Indonesia diperkirakan akan terjadi sebesar 0,61%.
                    Inflasi ini diprediksi terjadi di tahun 2022.
                  </div>
                  <div class="card-body">
                    <a class="outline-success mt-3" href="https://finance.detik.com/berita-ekonomi-bisnis/d-6156320/harga-cabai-merah-hingga-telur-ayam-mahal-bps-catat-inflasi-juni-061" target="_blank">Lihat lebih lanjut <i class="fa fa-angle-right me-3"></i></a>
                  </div>
              </div>
            </div>
            <div class="slick-carousel-item col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="card">
                <img class="img-fluid card-img-berita" src="img/berita-2.jpg" alt="" />
                  <div class="card-body position-relative">
                    <b>Aplikasi e-commerce terbaru</b>
                  </div>
                  <div class="card-body">
                    Tokopaedi siap meluncurkan aplikasi e-commerce berbasis online
                    di Indonesia pada awal tahun ini.
                  </div>
                  <div class="card-body">
                    <a class="outline-success mt-3" href="">Lihat lebih lanjut <i class="fa fa-angle-right me-3"></i></a>
                  </div>
              </div>
            </div>
            <div class="slick-carousel-item col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="card">
                <img class="img-fluid card-img-berita" src="img/berita-3.jpg" alt="" />
                  <div class="card-body position-relative">
                    <b>PPKM kembali ke level 1</b>
                  </div>
                  <div class="card-body">
                    PPKM kembali terjadi di Indonesia. Hal ini membuat para
                    UMKM dan pelaku bisnis kesulitan dalam menjalankan usahanya.
                  </div>
                  <div class="card-body">
                    <a class="outline-success mt-3" href="">Lihat lebih lanjut <i class="fa fa-angle-right me-3"></i></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Berita End -->

    <!-- Visi & Misi Start -->
    <div class="container-xxl py-5" id="visimisi">
      <div class="container">
        <br><br>
        <div
          class="row g-5 mb-5 align-items-end wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="col-lg-6">
            <h1 class="display-5 mb-0">
              Visi & Misi
              <span class="text-primary">Tokopaedi</span>
            </h1>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card text-center">
                <i class="fa fa-globe iconvisi"></i>
                <div class="card-body">
                  <b>Menjadi kiblat e-commerce di Asia</b>
                  <br>
                  <span class="spaceafterbold">
                    Kami percaya Tokopaedi kedepannya akan menjadi
                    kiblat e-commerce di Asia Tenggara.
                  </span>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="card text-center">
                <i class="fa fa-chart-line iconvisi"></i>
                <div class="card-body">
                  <b>Menggerakan roda bisnis Indonesia</b>
                  <br>
                  <span class="spaceafterbold">
                    Tokopaedi siap menggerakan roda bisnis yang nantinya akan 
                    meningkatkan omset ekonomi di Indonesia.
                  </span>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="card text-center">
                <i class="fa fa-users iconvisi"></i>
                <div class="card-body">
                  <b>Membantu umkm & pelaku bisnis lainnya</b>
                  <br>
                  <span class="spaceafterbold">
                    Dengan aplikasi yang mudah digunakan, tentunya akan
                    memudahkan umkm dan pelaku bisnis lainnya.
                  </span>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Visi & Misi End -->

    <!-- Testimoni Start -->
    <div class="container-xxl py-5" id="testimoni">
      <div class="container">
        <br><br>
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
          <div class="col-lg-6">
            <h1 class="display-5 mb-0">
              Testimoni
              <span class="text-primary">Tokopaedi</span>
            </h1>
          </div>
        </div>
        <div class="slick-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
          <div class="slick-carousel-item">
            <div class="card">
              <img
              class="img-fluid rounded-circle card-img-top border border-5 mx-auto mb-4"
              src="img/testimonial-1.jpg"
            />
            <div class="testimonial-text rounded text-center p-4">
              <p>
                <q> Tokopaedi membantu saya belanja online dengan mudah dan aman. </q>
              </p>
              <h5 class="mb-1">Sule</h5>
              <span class="fst-italic">Pelawak</span>
            </div>
            </div>
          </div>
          <div class="slick-carousel-item">
            <div class="card">
              <img
                class="img-fluid rounded-circle card-img-top border border-5 mx-auto mb-4"
                src="img/testimonial-2.jpg"
              />
              <div class="testimonial-text rounded text-center p-4">
                <p>
                  <q> Mudah dalam penjualan barang dan jasa. </q>
                </p>
                <h5 class="mb-1">Wendy</h5>
                <span class="fst-italic">Pelaku UMKM</span>
              </div>
              </div>
          </div>
          <div class="slick-carousel-item">
            <div class="card">
              <img
                class="img-fluid rounded-circle card-img-top border border-5 mx-auto mb-4"
                src="img/testimonial-3.jpg"
              />
              <div class="testimonial-text rounded text-center p-4">
                <p>
                  <q> Harga murah, kualitas barang sesuai dengan aplikasi. </q>
                </p>
                <h5 class="mb-1">Andre</h5>
                <span class="fst-italic">Pembawa Acara</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimoni End -->

    <!-- Footer Start -->
    <div
      class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Address</h5>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>Lenteng Agung, Jagakarsa
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>(+62)21123456
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>tokopaedi@gmail.com
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Quick Links</h5>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Our Services</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">Support</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Popular Links</h5>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Our Services</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">Support</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Newsletter</h5>
            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control border-0 w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Your email"
              />
              <button
                type="button"
                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
              >
                SignUp
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; 
              <a class="" href="#">
                Tokopaedi
              </a>
              <?php
                echo(date('Y')); 
              ?>
              All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              <!-- Developed By
              <a class="" href=""
                >Reno</a
              ><br> -->
              Designed By
              <a class="border-bottom" href="https://htmlcodex.com"
                >HTML Codex</a
              >
              <br />Distributed By:
              <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Modal Start -->
    <div class="modal fade" id="modal-cari" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content popup-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cari yang anda butuhkan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body popup">
            <form action="index.html">
              <div class="input-icons">
                <i class="fa fa-search icon"></i>
                <input class="input-field" type="text" placeholder="Cari..." required>
              </div>
              <button type="submit" class="btn btn-primary btn-field">Cari</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/slick-1.8.1/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
