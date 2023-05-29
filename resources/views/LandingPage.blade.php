<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personality Test -- Polije</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Source+Sans+Pro:wght@600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#">
        <h1 class="logo">Personality Test</h1>
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">Personality Test</a>

          <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-navbar-link>Beranda</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-navbar-link>Tentang Kami</a>
          </li>


          <li class="navbar-item">
            <a href="#features" class="navbar-link" data-navbar-link>Manfaat</a>
          </li>


        </ul>

      </nav>

      <a href="login" class="btn">


        <span>Login</span>
      </a>

      <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">


            <h2 class="h2 hero-title">Personality Test</h2>

            <p class="hero-text">
            Personality Test dapat membantu
            menemukan kepribadian yang ada pada dirimu!
            </p>

            <a href="login">
            <button class="btn">Mulai Tes</button>
            </a>
          </div>

          <figure class="hero-banner">
            <img src="images/hero-banner.png" width="50" height="10" loading="lazy" alt="hero-banner"
              class="w-100 banner-animation">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about">
        <div class="container">

          <figure class="about-banner">
            <img src="images/about-banner.png" width="700" height="532" loading="lazy" alt="about banner"
              class="w-100 banner-animation">
          </figure>

          <div class="about-content">

            <h2 class="h2 section-title underline">Apa itu Personality Test</h2>

            <p class="about-text">
              Personality test adalah sebuah tes yang berguna untuk mengungkap dan memahami karakteristik kepribadian seseorang. 
              Melalui serangkaian pertanyaan dan penilaian, Personality test membantu Anda menggali ke dalam aspek-aspek penting dari diri Anda, 
              membantu Anda mengenali kekuatan Anda, serta memberikan panduan tentang kepribadiam yang ada pada diri anda.
            </p>

            <p class="about-text">
              Mengetahui kepribadian Anda adalah langkah penting dalam pengembangan diri. Ketika Anda memahami karakteristik dan preferensi pribadi Anda,
              Anda dapat lebih baik dalam mengelola hubungan, mengambil keputusan, menavigasi karir, dan mencapai kepuasan hidup yang lebih tinggi.
            </p>

            {{-- <ul class="stats-list">

              <li class="stats-card">
                <p class="h3 stats-title">9875</p>

                <p class="stats-text">Akun Terdaftar</p>
              </li>

              <li class="stats-card">
                <p class="h3 stats-title">7894</p>

                <p class="stats-text">Project Lunched</p>
              </li>

              <li class="stats-card">
                <p class="h3 stats-title">65</p>

                <p class="stats-text">Test Completed</p>
              </li>

            </ul> --}}

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      {{-- <section class="section service" id="services">
        <div class="container">

          <h2 class="h2 section-title underline">Personal Assesment</h2>

          <ul class="service-list"> --}}

            {{-- <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="telescope-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Minat Karir</h3>

                <p class="text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>

              </div>
            </li> --}}

            {{-- <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="desktop-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Kesiapan Karier</h3>

                <p class="text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="globe-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Gaya Kepribadian</h3>

                <p class="text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="globe-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Minat & Bakat</h3>

                <p class="text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>

              </div>
            </li> --}}

            {{-- <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="globe-outline"></ion-icon>
                </div>

                <h3 class="h3 title">English Assesment</h3>

                <p class="text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>

              </div>
            </li> --}}

            {{-- <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="globe-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Pemetaan Potensi</h3>

                <p class="text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>

              </div>
            </li> --}}

          {{-- </ul> --}}

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="section features" id="features">
        <div class="container">

          <h2 class="h2 section-title underline">Manfaat Yang Didapatkan</h2>

          <ul class="features-list">

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="bulb-outline"></ion-icon>
                </div>

                <div class="content">
                  {{-- <h3 class="h3 title">Ide & Analysis</h3> --}}

                  <p class="text">
                    Personality test membantu Anda memahami kekuatan, 
                    kelemahan, dan preferensi pribadi Anda. Dengan pemahaman yang lebih baik tentang diri Anda, Anda 
                    dapat mengoptimalkan potensi Anda.
                </div>

              </div>
            </li>

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="color-palette-outline"></ion-icon>
                </div>

                <div class="content">
                  {{-- <h3 class="h3 title">Designing</h3> --}}

                  <p class="text">
                    Melalui personality test, Anda dapat mengidentifikasi area yang mungkin perlu diperbaiki atau ditingkatkan. 
                    Hal ini memungkinkan Anda untuk fokus pada pengembangan pribadi yang lebih mendalam, baik itu dalam hal keterampilan 
                    interpersonal, manajemen emosi, atau peningkatan kepercayaan diri.
                  </p>
                </div>

              </div>
            </li>

          </ul>

          <figure class="features-banner">
            <img src="images/feautres-banner.png" width="369" height="318" loading="lazy" alt="Features Banner"
              class="w-100 banner-animation">
          </figure>

          <ul class="features-list">

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="code-slash-outline"></ion-icon>
                </div>

                <div class="content">
                  {{-- <h3 class="h3 title">Development</h3> --}}

                  <p class="text">
                    Personality test dapat membantu Anda memahami bagaimana kepribadian Anda berinteraksi dengan kepribadian orang lain. 
                    Dengan wawasan ini, Anda dapat memperbaiki komunikasi, membangun hubungan yang lebih harmonis 
                    dan saling mendukung dalam kehidupan pribadi anda
                </div>

              </div>
            </li>

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="content">
                  {{-- <h3 class="h3 title">Testing & Lunching</h3> --}}

                  <p class="text">
                    melalui personality test dapat membantu Anda dalam pemilihan karir yang sesuai dengan minat, nilai, 
                    dan kecenderungan Anda. Anda dapat menemukan pekerjaan yang cocok dengan kepribadian Anda dan mengembangkan potensi Anda.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">Personality Test</a>

          <p class="text">
          Personality Test adalah Platform Psikotes Online yang dapat digunakan bagi semua orang.  
          Kami memberikan kemudahan dan kepraktisan solusi dalam pelaksanaan Psikotes 
          untuk menemukan kepribadian yang sesuai dengan diri anda.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Isi Halaman</p>
          </li>

          <li>
            <a href="#home" class="footer-link">Beranda</a>
          </li>

          <li>
            <a href="#about" class="footer-link">Tentang Kami</a>
          </li>

          <li>
            <a href="#features" class="footer-link">Manfaat</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Pelayanan Kami</p>
          </li>

          <li>
            <a href="login" class="footer-link">Tes Kepribadian Introvert dan Ekstrovert</a>
          </li>

          <li>
            <a href="login" class="footer-link">Penilaian Hasil Tes Kepribadian</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contact Us</p>
          </li>

          <li class="footer-item">

            <div class="footer-item-icon">
              <ion-icon name="call"></ion-icon>
            </div>

            <div>
              <a href="tel:+2484214313" class="footer-item-link">+248-421-4313</a>
              <a href="tel:+2486871365" class="footer-item-link">+248-687-1365</a>
            </div>

          </li>

          <li class="footer-item">

            <div class="footer-item-icon">
              <ion-icon name="mail"></ion-icon>
            </div>

            <div>
              <a href="mailto:info@desinic.com" class="footer-item-link">PersonalityTest.com</a>
              <a href="mailto:help@desinic.com" class="footer-item-link">PersonalityTest.com</a>
            </div>

          </li>

          <li class="footer-item">

            <div class="footer-item-icon">
              <ion-icon name="location"></ion-icon>
            </div>

            <address class="footer-item-link">
              Jember,Jawa Timur,Indonesia
            </address>

          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <p class="copyright">
        Since &copy; 2023 <a href="#" class="copyright-link">Personality Test</a>. Polije
      </p>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top  active" aria-label="Go To Top" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>