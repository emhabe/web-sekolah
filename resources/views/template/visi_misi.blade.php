@extends('layout.landing')
@section('content')
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

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
                                    <li class="dropdown current">
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

    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets_landing/images/gambar1.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Blog Details</h2>
            </div>
        </div>
    </section>
    <!--Blog Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            <img src="assets/images/blog/blog-details-img-1.jpg" alt="">
                        </div>
                        <div class="blog-details__content">
                            <div class="row">
                                <ul class="list-unstyled blog-details__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin </a>
                                    </li>
                                </ul>
                                <h3 class="blog-details__title">Visi Dan Misi</h3>
                                <div class="mb-4">
                                    <h3 class="blog-details__title2">Visi SMK PGRI Singosari</h3>
                                    <p class="blog-details__text-1">Mewujudkan SMK berkarakter, berkompeten dan unggul.</p>
                                </div>
                                <div class="mb-4">
                                    <h3 class="blog-details__title2">Misi SMK PGRI Singosari</h3>
                                    <p class="blog-details__text-1">1. Menanamkan keimanan, ketaqwaan dan akhlak mulia.</p>
                                    <p class="blog-details__text-1">2. Menyelenggarakan pendidikan yang memadukan aspek agama, iptek dan budaya</p>
                                    <p class="blog-details__text-1">3. Menumbuhkan budaya literasi dan kecakapan hidup</p>
                                    <p class="blog-details__text-1">4. Menciptakan sumber daya yang kompeten, mandiri dan mampu beradaptasi</p>
                                    <p class="blog-details__text-1">5. Mewujudkan lingkungan yang bersih, indah dan nyaman</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            <img src="assets/images/blog/blog-details-img-1.jpg" alt="">
                        </div>
                        <div class="blog-details__content">
                            <div class="row">
                                <ul class="list-unstyled blog-details__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin </a>
                                    </li>
                                </ul>
                                <h3 class="blog-details__title">Tujuan</h3>
                                <div class="mb-4">
                                    <h3 class="blog-details__title2">Tujuan SMK PGRI Singosari</h3>
                                    <p class="blog-details__text-1">1. Sekolah menghasilkan lulusan yang beriman, bertaqwa, berakhak mulia dengan kompetensi yang bersaing di era global.</p>
                                    <p class="blog-details__text-1">2. Sekolah menghasilkan dan menerapkan kurikulum sekolah yang mampu mencapai Standar Kompetensi Lulusan (SKL) Pendidikan Menengah Kejuruan (PMK).</p>
                                    <p class="blog-details__text-1">3. Sekolah meraih nilai ”A” pada akreditasi nasional dengan mengimplementasikan Penjamin Mutu Pendidikan (PMP).</p>
                                    <p class="blog-details__text-1">4. Sekolah melaksanakan proses pembelajaran yang inovatif, kreatif, komunikatif, kolaboratif dan berbasis IT dengan menerapkan pembelajaran bilingual pada mata pelajaran peminatan.</p>
                                    <p class="blog-details__text-1">5. Sekolah menyediakan sarana dan prasarana pendidikan yang relevan dan memenuhi standar sarana dan prasarana pendidikan menengah kejuruan.</p>
                                    <p class="blog-details__text-1">6. Sekolah melaksanakan kegiatan pengembangan diri dalam rangka membentuk karakter peserta didik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Details End-->
@endsection
