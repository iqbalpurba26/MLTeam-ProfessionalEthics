<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="asset/icon.png" >
    <link rel="stylesheet" href="css/style.css">
    <title>MLTeam</title>
  </head>

  <body>

  <!-- AWAL BAGIAN NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark mb-5 fixed-top" id="navBarP">
        <div class="container">
          <a class="navbar-brand" href="#">MLTeam</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item" >
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="#about" >About Us</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="#our">Our Team</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="#contact">Contact</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="login.php" target="_blank" >Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- AKHIR BAGIAN NAVBAR -->


    
     <!-- AWAL BAGIAN HOME / CAROUSEL -->
     <section id="home">
        <div id="carouselExampleDark" class="carousel carousel-dark slide mb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark"  data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <center><img src="asset/1.png" class="d-block carousel1"  ></center>
                    <div class="carousel-caption d-none d-md-block">
                        <h5  id="judul" style="margin-top: 200px;">DIPERIKSA OLEH AHLINYA</h5>
                    <p>Kami memiliki tim yang ahli dibidangnya dan telah memegang sertifikat keahlian</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <center><img src="asset/2.png" class="d-block carousel1" alt="..."></center>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="judul">AMANAH DAN TERPERCAYA</h5>
                        <p>Kami memegang teguh prinsip kerahasiaan data dan model yang diperiksa</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <center><img src="asset/3.png" class="d-block carousel1" alt="..."></center>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 id="judul">CEPAT DAN TEPAT</h5>
                        <p>Kami memberikan service yang cepat dan tepat. Klien tidak perlu menunggu lama</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- AKHIR BAGIAN HOME / CAROUSEL -->

    <center>
    <div class="periksa" id="periksa">
        <a href="login.php">Ajukan Pemeriksaan Sistem</a>
    </div>
    </center>
   




    <!-- AWAL BAGIAN MENU ABOUT US -->
    <section id="about" class="mb-5">
        <div class="container mb-4">
            <div class="row text-center">
                <div class="col">
                    <h2 id="judulBesar">ABOUT US</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
              <div class="col-md-6" data-aos="fade-right" data-aos-duration="1100" data-aos-offset="200">
              MLTeam adalah sebuah perusahaan yang telah mengukuhkan dirinya sebagai pemimpin di industri assessment sistem machine learning. Dengan fokus utama pada penilaian dan evaluasi kelayakan suatu sistem machine learning, MLTeam memberikan kontribusi yang signifikan dalam memastikan kehandalan dan kualitas sistem sebelum dipublikasikan. Tim ahli MLTeam terdiri dari para pakar machine learning yang berpengalaman, serta memiliki pemahaman mendalam terhadap berbagai algoritma dan teknologi terkini. Proses assessment yang mereka tawarkan tidak hanya mencakup uji kinerja, tetapi juga aspek keamanan, interpretabilitas, dan kepatuhan terhadap regulasi, sehingga klien dapat yakin bahwa sistem mereka siap untuk diimplementasikan dan dipublikasikan.
              </div>
              <div class="col-md-6" data-aos="fade-left" data-aos-duration="1100" data-aos-delay="600">
              MLTeam telah membangun reputasi sebagai mitra yang dapat diandalkan bagi perusahaan-perusahaan yang ingin memastikan bahwa sistem machine learning mereka memenuhi standar tinggi. Dengan pendekatan yang holistik dan berorientasi pada solusi, MLTeam tidak hanya memberikan laporan hasil assessment, tetapi juga memberikan rekomendasi dan solusi untuk meningkatkan kualitas dan efisiensi sistem. Dengan demikian, MLTeam tidak hanya sekadar menyediakan jasa assessment, tetapi juga menjadi rekan strategis yang membantu klien meraih keberhasilan dalam menerapkan teknologi machine learning secara efektif dan aman.
              </div>
            </div>
        </div>
      </section>
    <!-- AKHIR BAGIAN MENU ABOUT US -->


    <!-- AWAL MENU OUR TEAM -->
    <section id="our">
        <div class="container mb-5">
          <div class="row text-center">
            <div class="col">
              <h2 id="judulBesar">OUR TEAM</h2>
            </div>
          </div>
        </div>

        <div class="container  align-item-center">
          <div class="row mb-5">
            <div class="col-md-5">
              <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0" >
                  <div class="col-md-5">
                    <img src="asset/yakin.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7" >
                    <div class="card-body">
                      <h5 class="card-title" id="judulOurTeam">Yakin Otniel Surbakti</h5>
                      <p class="card-text">Business Analyst in Machine Learning</p>
                      <center class="mb-1"><a href="portofolio.html " target="_blank" class="btn" id="btnProfile">Kunjungi Profile </a></center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col mt-4" data-aos="fade-left" data-aos-duration="1100" data-aos-delay="500">
             <p class="card-text">Yakin, seorang ahli bisnis yang berdedikasi di bidang machine learning, memiliki kombinasi unik antara wawasan bisnis yang mendalam dan pemahaman yang kuat terhadap teknologi machine learning. Dengan kecerdasan analitisnya, Yakin mampu membawa nilai tambah dalam merancang strategi bisnis yang optimal dan memanfaatkan potensi maksimal dari implementasi solusi machine learning.</p>
            </div>
          </div>
        </div>

        <div class="container text-end justify-content-end">
          <div class="row mb-1" style="padding-left:100px">
            <div class="col mt-1" data-aos="fade-left" data-aos-duration="1100" data-aos-delay="500">
            <p class="card-text">Iqbal, seorang profesional berpengalaman di bidang data science, mengejawantahkan perannya sebagai penjaga ketelitian dan kehandalan proses pengumpulan serta pengolahan data di perusahaan ini. Dengan ketajamannya dalam menganalisis data, Iqbal tidak hanya memastikan bahwa setiap langkah dalam siklus data berjalan efisien, tetapi juga berperan krusial dalam menghasilkan wawasan yang mendalam untuk mendukung keputusan bisnis yang strategis.</p>
            </div>
            <div class="col">
              <div class="card mb-1" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-5">
                    <img src="asset/iqbaall.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                    <div class="card-body">
                      <h5 class="card-title">M. Iqbal Purba</h5>
                      <p class="card-text">Data Scientist and Analyst</p>
                      <a href="https://www.markzuckerbergofficial.com/ " target="_blank" class="btn" id="btnProfile">Kunjungi Profile </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="container  align-item-center" style="padding-top:60px">
          <div class="row mb-5">
            <div class="col-md-5">
              <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0" >
                  <div class="col-md-5">
                    <img src="asset/faiz.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7" >
                    <div class="card-body">
                      <h5 class="card-title" id="judulOurTeam">Ahmad Faiz Amru</h5>
                      <p class="card-text">Machine Learning Engineer</p>
                      <center class="mb-1"><a href="portofolio.html " target="_blank" class="btn" id="btnProfile">Kunjungi Profile </a></center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col mt-4" data-aos="fade-left" data-aos-duration="1100" data-aos-delay="500">
             <p class="card-text">Faiz, machine learning engineer, memainkan peran kunci dalam pemilihan algoritma untuk keberhasilan perusahaan. Dengan keahlian teknisnya, ia teliti memilih algoritma yang sesuai dengan tujuan bisnis. Pendekatannya yang cermat menjamin efektivitas dan nilai strategis implementasi machine learning. Faiz memastikan setiap langkah mendukung kesuksesan perusahaan.</p>
            </div>
          </div>
        </div>



        <div class="container text-end justify-content-end">
          <div class="row mb-1" style="padding-left:100px">
            <div class="col mt-1" data-aos="fade-left" data-aos-duration="1100" data-aos-delay="500">
            <p class="card-text">Zaki, seorang machine learning engineer, memiliki tanggung jawab khusus dalam mengevaluasi dan memastikan keefektifan proses pelatihan model di klien kami. Dengan keahlian teknis yang tinggi, Zaki meneliti dengan cermat setiap langkah pelatihan model, memastikan bahwa model yang dihasilkan tidak hanya akurat, tetapi juga memenuhi standar kualitas tinggi yang diperlukan.</p>
            </div>
            <div class="col">
              <div class="card mb-1" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-5">
                    <img src="asset/zaki.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                    <div class="card-body">
                      <h5 class="card-title">Zaki Afwanul Hilmi Lubis</h5>
                      <p class="card-text">Machine Learning Engineer</p>
                      <a href="https://www.markzuckerbergofficial.com/ " target="_blank" class="btn" id="btnProfile">Kunjungi Profile </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="container  align-item-center" style="padding-top:60px">
          <div class="row mb-5">
            <div class="col-md-5">
              <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0" >
                  <div class="col-md-5">
                    <img src="asset/ica2.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7" >
                    <div class="card-body">
                      <h5 class="card-title" id="judulOurTeam">Fransisca Haliem</h5>
                      <p class="card-text">Machine Learning Engineer</p>
                      <center class="mb-1"><a href="portofolio.html " target="_blank" class="btn" id="btnProfile">Kunjungi Profile </a></center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col mt-4" data-aos="fade-left" data-aos-duration="1100" data-aos-delay="500">
             <p class="card-text">Fransisca, seorang machine learning engineer, memiliki peran penting dalam memeriksa dan menginterpretasikan hasil evaluasi model di klien kami. Dengan keahlian teknisnya, Zaki menjamin bahwa setiap aspek evaluasi model dianalisis secara teliti, sehingga memberikan pemahaman yang mendalam terhadap kinerja model dan memungkinkan pengambilan keputusan yang tepat untuk klien.</p>
            </div>
          </div>
        </div>


        <div class="container text-end justify-content-end">
          <div class="row mb-1" style="padding-left:100px">
            <div class="col mt-1" data-aos="fade-left" data-aos-duration="1100" data-aos-delay="500">
            <p class="card-text">Astry, seorang machine learning engineer, memainkan peran krusial dalam pemeriksaan persiapan deployment model di klien kami. Dengan keahlian teknis yang tinggi, Astry memastikan bahwa setiap langkah dalam proses persiapan deployment dievaluasi secara cermat, sehingga model dapat diimplementasikan dengan lancar dan memberikan hasil optimal bagi klien.</p>
            </div>
            <div class="col">
              <div class="card mb-1" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-5">
                    <img src="asset/cewek22.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                    <div class="card-body">
                      <h5 class="card-title">Astry Debora</h5>
                      <p class="card-text">Machine Learning Engineer</p>
                      <a href="https://www.markzuckerbergofficial.com/ " target="_blank" class="btn" id="btnProfile">Kunjungi Profile </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container  align-item-center" style="padding-top:60px">
          <div class="row mb-5">
            <div class="col-md-5">
              <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0" >
                  <div class="col-md-5">
                    <img src="asset/varo.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7" >
                    <div class="card-body">
                      <h5 class="card-title" id="judulOurTeam">Alvaro</h5>
                      <p class="card-text">Data Analyst</p>
                      <center class="mb-1"><a href="portofolio.html " target="_blank" class="btn" id="btnProfile">Kunjungi Profile </a></center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col mt-4" data-aos="fade-left" data-aos-duration="1100" data-aos-delay="500">
             <p class="card-text">Alvaro, seorang Data Analyst, mengemban tanggung jawab penting dalam memeriksa laporan hasil penerapan machine learning di klien kami. Dengan keterampilan analitis yang mendalam, Alvaro memastikan bahwa setiap laporan memberikan wawasan yang akurat dan bermanfaat, sehingga dapat mendukung pengambilan keputusan strategis bagi klien.</p>
            </div>
          </div>
        </div>

      </section>
    <!-- AKHIR MENU OUR TEAM -->

    <!-- AWAL MENU CONTACT -->
    <section id="contact" class="mb-5">
      <div class="container mb-4">
        <div class="row">
          <div class="col">
            <h2 class="text-center" style="font-weight: bold;">CONTACT</h2>
          </div>
        </div>
      </div>

      <div class="container ">
        <div class="row">
          <div class="col-md-7">
              <label for="exampleDataList" class="form-label">Name</label>
              <input class="form-control mb-3" list="datalistOptions" id="exampleDataList" placeholder="Your Name ">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="YourEmail@gmail.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">WhatsApp Number</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="+62 812 6339 9193">
              </div>
              <div class="mb-5">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <center class="mb-3"><a href="" target="_blank" class="btn" id="btnProfile">Send Messagge </a></center>
          </div>

          <div class="col-md-5 text-center mb-5 align-items-center" >
            <!-- Awal WhatsApp -->
                <p id="Tulisan" ><img src="asset/twitter.png">Twitter</p>
                <p style="font-weight: 100; font-size:20px; padding-left:30px;"><a href="https://twitter.com/pensilbelajar" style="text-decoration: none; color:#000;">MLTeam Official</a></p>
            <!-- Akhir WhatsApp -->
                <br>
                <br>

            <!-- Awal Instagram -->
                <p id="Tulisan" ><img src="asset/instagram.png"> Instagram</p>
                <p id="InfoCont" style="font-weight: 100; font-size:20px; padding-left:30px;" ><a href="https://instagram.com/_.pensilbelajar" style="text-decoration: none; color:#000;">official_mlteam</a></p>
            <!-- Akhir Instagram -->
                <br>
                <br>

            <!-- Awal Email -->
                <p id="Tulisan" ><img src="asset/email.png"> Email</p>
                <p id="InfoCont" style="font-weight: 100; font-size:20px; padding-left:30px;" ><a href="mailto:pensilbelajar091@gmail.com" style="text-decoration: none; color:#000;">admin@mlteam.co.id</a></p>
            <!-- Akhir Email -->
          </div>
        </div>
      </div>
    </section>
    <!-- AKHIR MENU CONTACT -->

    <!-- AWAL FOOTER -->
    <section id="footer">
    &copy 2022 Team Web Dev PensilBelajar All rights reserved.
    </section>
   <!-- AKHIR FOOTER -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once : false,
      });
    </script>
    
  </body>

</html>