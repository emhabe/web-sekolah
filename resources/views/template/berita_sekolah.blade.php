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
                                    <li>
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
                                    <li class="current"> 
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

    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets_landing/images/gambar1.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Berita Sekolah</h2>
            </div>
        </div>
    </section>
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
