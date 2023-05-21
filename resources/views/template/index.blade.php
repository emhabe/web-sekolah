@extends('layout.landing')
@section('content')
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <!-- <div class="preloader">
            <div class="preloader__image"></div>
        </div> -->
    <!-- /.preloader -->


    <header class="main-header clearfix">
        <div class="main-header__top">
            <div class="main-header__top-social-box">
                <div class="container">
                    <div class="main-header__top-social-box-inner">
                        <p class="main-header__top-social-text">Akreditasi Sekolah A (Industri) !</p>
                        <div class="main-header__top-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header__top-details">
                <div class="container">
                    <div class="main-header__top-details-inner">
                        <div class="main-header__logo">
                            <a href="/"><img src="assets_landing/images/logo_utama.png" alt="" width="89"
                                    height="88"></a>
                        </div>
                        <ul class="list-unstyled main-header__top-details-list">
                            <li>
                                <div class="icon">
                                    <span class="icon-message"></span>
                                </div>
                                <div class="text">
                                    <h5>Kirim Email</h5>
                                    <p><a href="mailto:smkpgri_sgs_mlg@yahoo.co.id">smkpgri_sgs_mlg@yahoo.co.id</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-time"></span>
                                </div>
                                <div class="text">
                                    <h5>Sen - Jum</h5>
                                    <p>07:00 - 16:00</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="text">
                                    <h5>Hubungi Kami</h5>
                                    <p><a href="tel:(0341) 458 598">(0341) 458 598</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-location"></span>
                                </div>
                                <div class="text">
                                    <h5> Jl. Morotanjek 206</h5>
                                    <p><a href="https://goo.gl/maps/pEqgqSyR4C9ABjLN7" target="_blank">
                                            Singosari,Kab.Malang</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu clearfix">
            <div class="main-menu__wrapper clearfix">
                <div class="container">
                    <div class="main-menu__wrapper-inner clearfix">
                        <div class="main-menu__left">
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="current">
                                        <a href="/">Beranda </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Tentang Kami</a>
                                        <ul>
                                            <li><a href="/sejarah">Sejarah Singkat</a></li>
                                            <li><a href="/visi_misi">Visi & Misi</a></li>
                                            <li><a href="/fasilitas">Fasilitas</a></li>
                                            <li><a href="/tatatertib">Tata Tertib</a></li>
                                            <li><a href="/budaya_sekolah">Budaya Sekolah </a></li>
                                            <li><a href="/galeri_sekolah">Galeri</a></li>
                                            <li><a href="/mitra_kerja">Mitra Kerja</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Manajemen </a>
                                        <ul>
                                            <li><a href="/kepala_sekolah">Kepala Sekolah</a></li>
                                            <li><a href="/kurikulum">Kurikulum</a></li>
                                            <li><a href="/kesiswaan">Kesiswaan</a></li>
                                            <li><a href="/hummas">Hummas</a></li>
                                            <li><a href="/sarana_prasarana">Sarana Prasarana</a>
                                            </li>
                                            <li><a href="/tata_usaha">Tata Usaha</a></li>
                                            <li><a href="/tenaga_pendidik">Tenaga Pendidik</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Kompetensi Keahlian</a>
                                        <ul>
                                            <li><a href="/teknik_otomasi_industri">Teknik Otomasi Industri</a></li>
                                            <li><a href="/teknik_kendaraan_ringan">Teknik Kendaraan Ringan</a></li>
                                            <li><a href="/teknik_sepeda_motor">Teknik Sepeda Motor</a></li>
                                            <li><a href="/teknik_elekronika_industri">Teknik Elektronika Industri</a></li>
                                            <li><a href="/teknik_komputer_jaringan">Teknik Komputer Jaringan</a></li>
                                            <li><a href="/rekayasa_perangkat_lunak">Rekayasa Perangkat Lunak</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/bursa_kerja_khusus">Bursa Kerja Khusus</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Program </a>
                                        <ul>
                                            <li><a href="/organisasi">Organisasi</a></li>
                                            <li><a href="/ekstrakulikuler">Ekstrakulikuler</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/berita_sekolah">Berita</a>
                                    </li>
                                    <li>
                                        <a href="/login">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__search-box">
                                <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider-three clearfix mt-2">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="image-layer-three"
                        style="background-image: url(assets_landing/images/backgrounds/main-slider-3-1.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="main-slider-three__content">
                                    <h4 class="main-slider-three__title"><span class="mencoba">Selamat Datang </span><br><div class="mencoba2">Dihalaman resmi</div> SMK PGRI <span>Singosari</span>
                                        <br>
                                    </h4>
                                    <p class="main-slider-three__text">Selamat datang di website sekolah kami! Bersama-sama, mari menjelajahi dunia pengetahuan dan membangun masa depan yang gemilang. <br> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer-three"
                        style="background-image: url(assets_landing/images/backgrounds/main-slider-3-2.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="main-slider-three__content">
                                    <h2 class="main-slider-three__title">We’re here <br> to <span>clean</span> your
                                        <br> home
                                    </h2>
                                    <p class="main-slider-three__text">There are many variations of passages of
                                        Lorem Ipsum available, but <br> the majority have suffered alteration.</p>
                                    <div class="main-slider-three__btn-box">
                                        <a href="about.html" class="thm-btn main-slider-three__btn">Discover more <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer-three"
                        style="background-image: url(assets_landing/images/backgrounds/main-slider-3-3.jpg);"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="main-slider-three__content">
                                    <h2 class="main-slider-three__title">We’re here <br> to <span>clean</span> your
                                        <br> home
                                    </h2>
                                    <p class="main-slider-three__text">There are many variations of passages of
                                        Lorem Ipsum available, but <br> the majority have suffered alteration.</p>
                                    <div class="main-slider-three__btn-box">
                                        <a href="about.html" class="thm-btn main-slider-three__btn">Discover more <i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>

        </div>
    </section>

    <!--Welcome One Start-->
    <section class="why-choose-two">
        <div class="why-choose-two-bubble float-bob-x">
            <img src="assets_landing/images/shapes/why-choose-two-bubble.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-two__left">
                        <div class="why-choose-two__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="why-choose-two__img-1">
                                <img src="assets_landing/images/resources/why-choose-two-img-1.jpg" alt="">
                            </div>
                            <div class="why-choose-two__img-2">
                                <img src="assets_landing/images/resources/why-choose-two-img-2.jpg" alt="">
                            </div>
                            <div class="why-choose-two__dot">
                                <img src="assets_landing/images/shapes/why-choose-two-dot.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-two__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Sambutan </span>
                            <h2 class="section-title__title">Kepala Sekolah</h2>
                        </div>
                        <p class="why-choose-two__text">Selamat datang di website SMK PGRI Singosari yang saya tujukan
                            untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses
                            seluruh informasi tentang sekolah kami. Di era digital saat ini, website sekolah merupakan pintu
                            gerbang informasi terdepan sebagai sarana untuk menyebarluaskan berbagai publikasii terkait
                            kemajuan pendidikan dan pencapaian SMK PGRI Singosari terkini.

                            Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik untuk semua
                            penggunanya, sehingga dapat menjalin silaturahmi yang erat disegala unsur. Kami menyadari bahwa
                            wesbite ini masih memiliki banyak kekurangan,oleh karena itu kepada seluruh civitas akademika
                            dan masyarakat umum dapat memberikan saran dan kritik demi kemajuan lebih lanjut.</p>
                        <p class="welcome-one__text-1">Ardianto,S.ST</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Welcome One End-->

    <!--Services One Start-->
    <section class="welcome-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Kompetensi Keahlian</span>
                <h2 class="section-title__title mb-2">Kompetensi Keahlian</h2>
            </div>

            <div class="row">
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__single-top-bubble"
                            style="background-image: url(assets_landing/images/shapes/services-one-single-top-bubble.png);">
                        </div>
                        <div class="services-one__icon">
                            <span class=""><img src="assets_landing/images/toi.gif" alt="" class="src"
                                    width="90" height="90"></span>
                        </div>
                        <div class="services-one__single-inner">
                            <div class="services-one__title-box">
                                <h5 class="services-one__title"><a href="plumbing-services.html">Teknik Otomasi
                                        Industri</a>
                                </h5>
                            </div>
                            <div class="services-one__text-box">
                                <p class="services-one__text">Program keahlian yang mempersiapkan siswa menjadi tenaga
                                    terampil
                                    di bidang teknik otomasi industri dan pemograman PLC</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="services-one__single">
                        <div class="services-one__single-top-bubble"
                            style="background-image: url(assets_landing/images/shapes/services-one-single-top-bubble.png);">
                        </div>
                        <div class="services-one__icon">
                            <span class=""><img src="assets_landing/images/tkr.gif" alt="" class="src"
                                    width="60" height="60"></span>
                        </div>
                        <div class="services-one__single-inner">
                            <div class="services-one__title-box">
                                <h5 class="services-one__title"><a href="laundry-services.html">Teknik Kendaraan
                                        Ringan</a>
                                </h5>
                            </div>
                            <div class="services-one__text-box">
                                <p class="services-one__text">Program keahlian yang mempersiapkan siswa menjadi tenaga
                                    terampil di bidang perbaikan kendaraan ringan (otomotif)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="services-one__single">
                        <div class="services-one__single-top-bubble"
                            style="background-image: url(assets_landing/images/shapes/services-one-single-top-bubble.png);">
                        </div>
                        <div class="services-one__icon">
                            <span class=""><img src="assets_landing/images/tsm.gif" alt="" class="src"
                                    width="70" height="70"></span>
                        </div>
                        <div class="services-one__single-inner">
                            <div class="services-one__title-box">
                                <h5 class="services-one__title"><a href="kitchen-cleaning.html">Teknik Sepeda Motor</a>
                                </h5>
                            </div>
                            <div class="services-one__text-box">
                                <p class="services-one__text">Program keahlian yang mempersiapkan siswa menjadi tenaga
                                    terampil di bidang perbaikan dan perawatan sepeda motor</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-one__single">
                        <div class="services-one__single-top-bubble"
                            style="background-image: url(assets_landing/images/shapes/services-one-single-top-bubble.png);">
                        </div>
                        <div class="services-one__icon">
                            <span class=""><img src="assets_landing/images/tei.gif" alt="" class="src"
                                    width="90" height="90"></span>
                        </div>
                        <div class="services-one__single-inner">
                            <div class="services-one__title-box">
                                <h5 class="services-one__title"><a href="office-cleaning.html">Teknik Elektronika
                                        Industri</a>
                                </h5>
                            </div>
                            <div class="services-one__text-box">
                                <p class="services-one__text">Program keahlian yang mempersiapkan siswa menjadi tenaga
                                    terampil di bidang dalam rangkaian elektronika</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="services-one__single">
                        <div class="services-one__single-top-bubble"
                            style="background-image: url(assets_landing/images/shapes/services-one-single-top-bubble.png);">
                        </div>
                        <div class="services-one__icon">
                            <span class=""><img src="assets_landing/images/tkj.gif" alt="" class="src"
                                    width="90" height="90"></span>
                        </div>
                        <div class="services-one__single-inner">
                            <div class="services-one__title-box">
                                <h5 class="services-one__title"><a href="window-cleaning.html">Teknik Komputer
                                        Jaringan</a>
                                </h5>
                            </div>
                            <div class="services-one__text-box">
                                <p class="services-one__text">Program keahlian yang mempersiapkan siswa menjadi tenaga
                                    terampil di bidang teknik komputer jaringan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="services-one__single">
                        <div class="services-one__single-top-bubble"
                            style="background-image: url(assets_landing/images/shapes/services-one-single-top-bubble.png);">
                        </div>
                        <div class="services-one__icon">
                            <span class=""><img src="assets_landing/images/rpl.gif" alt="" class="src"
                                    width="90" height="90"></span>
                        </div>
                        <div class="services-one__single-inner">
                            <div class="services-one__title-box">
                                <h5 class="services-one__title"><a href="toilet-cleaning.html">Rekayasa Perangkat
                                        Lunak</a>
                                </h5>
                            </div>
                            <div class="services-one__text-box">
                                <p class="services-one__text">Program keahlian yang mempersiapkan siswa menjadi tenaga
                                    terampil di bidang pemrogaman software.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Services One Single End-->
            </div>

        </div>
    </section>
    <!--Services One End-->

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="container">
            <div class="counter-one__inner wow fadeInUp" data-wow-delay="100ms">
                <div class="counter-one-bg-1"
                    style="background-image: url(assets_landing/images/backgrounds/counter-one-bg-1.png);"></div>
                <div class="counter-one-bg-2"
                    style="background-image: url(assets_landing/images/backgrounds/counter-one-bg-2.png);"></div>
                <ul class="list-unstyled counter-one__list">
                    <li>
                        <div class="counter-one__icon">
                            <span class=""><i class="fa-solid fa-city"></i></span>

                        </div>
                        <div class="counter-one__count-box">
                            <div class="counter-one__count-box-inner">
                                <h3 class="odometer" data-count="2562">00</h3>
                                <span class="counter-one__plus">+</span>
                            </div>
                            <p class="counter-one__text">Mitra Sekolah</p>
                        </div>
                    </li>
                    <li>
                        <div class="counter-one__icon">
                            <span class=""><i class="fa-solid fa-person-chalkboard"></i></span>
                        </div>
                        <div class="counter-one__count-box">
                            <div class="counter-one__count-box-inner">
                                <h3 class="odometer" data-count="562">00</h3>
                                <span class="counter-one__plus">+</span>
                            </div>
                            <p class="counter-one__text">Staf dan Pengajar</p>
                        </div>
                    </li>
                    <li>
                        <div class="counter-one__icon">
                            <span class=""><i class="fa-solid fa-trophy"></i></span>
                        </div>
                        <div class="counter-one__count-box">
                            <div class="counter-one__count-box-inner">
                                <h3 class="odometer" data-count="33">00</h3>
                                <span class="counter-one__plus">+</span>
                            </div>
                            <p class="counter-one__text">Winning Award</p>
                        </div>
                    </li>
                    <li>
                        <div class="counter-one__icon">
                            <span class=""><i class="fa-solid fa-chalkboard-user"></i>
                            </span>
                        </div>
                        <div class="counter-one__count-box">
                            <div class="counter-one__count-box-inner">
                                <h3 class="odometer" data-count="552">00</h3>
                                <span class="counter-one__plus">+</span>
                            </div>
                            <p class="counter-one__text">Jumlah Siswa Aktif</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Counter One End-->
    <section class="blog-page">
        <div class="container">
            <div class="section-title text-left">
                <span class="section-title__tagline">Berita Terbaru SMK PGRI Singosari</span>
                <h2 class="section-title__title">Berita Terbaru <br> </h2>
            </div>
            <div class="row">
                <!--Blog Page Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets_landing/images/gambar1.jpg" alt="">
                            <a href="blog-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> <span>Mar</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin </a>
                                </li>
                                <li><a href="blog-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.html">Simple cleaning tips you can use
                                    everyday</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>Plumber</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Page Single End-->
                <!--Blog Page Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets_landing/images/tes.png" alt="">
                            <a href="blog-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> <span>Mar</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin </a>
                                </li>
                                <li><a href="blog-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.html">Make your home cleaner than it's
                                    ever been</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>Kitchen</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Page Single End-->
                <!--Blog Page Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets_landing/images/blog/blog-1-3.jpg" alt="">
                            <a href="blog-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> <span>Mar</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin </a>
                                </li>
                                <li><a href="blog-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.html">My secret to cleaning east &
                                    effectively!</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>Kitchen</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Page Single End-->
            </div>
            <a href="about.html" class="thm-btn main-slider-three__btn">Lainya... <i class="fa fa-angle-right"></i></a>
        </div>
    </section>
    <section class="blog-page">
        <div class="container">
            <div class="section-title text-left">
                <span class="section-title__tagline">Berita Bursa Kerja Khusus</span>
                <h2 class="section-title__title">Bursa Kerja Khusus <br> </h2>
            </div>
            <div class="row">
                <!--Blog Page Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets_landing/images/blog/blog-1-1.jpg" alt="">
                            <a href="blog-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> <span>Mar</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin </a>
                                </li>
                                <li><a href="blog-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.html">Simple cleaning tips you can use
                                    everyday</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>Plumber</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Page Single End-->
                <!--Blog Page Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets_landing/images/blog/blog-1-2.jpg" alt="">
                            <a href="blog-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> <span>Mar</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin </a>
                                </li>
                                <li><a href="blog-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.html">Make your home cleaner than it's
                                    ever been</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>Kitchen</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Page Single End-->
                <!--Blog Page Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="assets_landing/images/blog/blog-1-3.jpg" alt="">
                            <a href="blog-details.html">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>25 <br> <span>Mar</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin </a>
                                </li>
                                <li><a href="blog-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.html">My secret to cleaning east &
                                    effectively!</a></h3>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>Kitchen</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog Page Single End-->
            </div>
            <a href="about.html" class="thm-btn main-slider-three__btn">Lainya... <i class="fa fa-angle-right"></i></a>
        </div>
    </section>
@endsection
