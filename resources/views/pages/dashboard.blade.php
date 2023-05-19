@extends('pages.master')
    <body>
    @include('pages.navbar')
    @include('pages.welcomearea')

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>Tes Kepribadian</h5>
                    </div>
                    <div class="left-text">
                        <p>This template is <a href="#">last updated on 20 August 2019 </a>for main menu drop-down arrow and sub menu text color. Duis auctor dolor eu scelerisque vestibulum. Vestibulum lacinia, nisl sit amet tristique condimentum. <br><br>
                        Sed a consequat velit. Morbi lectus sapien, vestibulum et sapien sit amet, ultrices malesuada odio. Donec non quam euismod, mattis dui a, ultrices nisi.</p>
                        <a href="{{ route('formtes') }}" class="main-button">Mulai Tes</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div class="left-heading">
                        <h5>Cara Memulai Tes Assessment</h5>
                    </div>
                    {{-- <p>Proin justo sapien, posuere suscipit tortor in, fermentum mattis elit. Aenean in feugiat purus.</p> --}}
                    <ul>
                        <li>
                            <img src="images/about-icon-01.png" alt="">
                            <div class="text">
                                <h6>Pilih Tes Assessment </h6>
                                <p>Kamu bisa memilih tes yang dinginkan pada pilihan tes dibawah</p>
                            </div>
                        </li>
                        <li>
                            <img src="images/about-icon-02.png" alt="">
                            <div class="text">
                                <h6>Mulai Tes Assessment</h6>
                                <p>Kamu akan diarahkan ke dalam salah satu menu tes yang kamu pilih</p>
                            </div>
                        </li>
                        <li>
                            <img src="images/about-icon-03.png" alt="">
                            <div class="text">
                                <h6>Hasil Tes Assessment</h6>
                                <p>Hasil tes akan kamu lihat setelah selesai mengisi jawaban atau bisa didapatkan melalui menu riwayat</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="images/left-image1.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>Apa itu introvert dan ekstrovert?</h5>
                    </div>
                    <div class="left-text">
                        <p>This template is <a href="#">last updated on 20 August 2019 </a>for main menu drop-down arrow and sub menu text color. Duis auctor dolor eu scelerisque vestibulum. Vestibulum lacinia, nisl sit amet tristique condimentum. <br><br>
                        Sed a consequat velit. Morbi lectus sapien, vestibulum et sapien sit amet, ultrices malesuada odio. Donec non quam euismod, mattis dui a, ultrices nisi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

  </body>
