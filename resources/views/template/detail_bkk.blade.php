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
                <h2>Detail Bursa Kerja Khusus </h2>
            </div>
        </div>
    </section>
        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                <img src="assets_landing/images/gambar2.jpg" alt="">
                            </div>
                            <div class="blog-details__content">
                                <ul class="list-unstyled blog-details__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> by Admin </a>
                                    </li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-details__title">Simple cleaning tips you can use everyday</h3>
                                <p class="blog-details__text-1">There are many variations of passages of Lorem Ipsum
                                    available, but majority have suffered alteration in some form, by injected humour,
                                    or randomised words which don't look even slightly believable. If you are going to
                                    use a passage of Lorem Ipsum. There are many variations of passages of Lorem Ipsum
                                    available, but majority have suffered alteration in some form, by injected humour,
                                    or randomised words which don't look even slightly believable. If you are going to
                                    use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin
                                    laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis.
                                    Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque
                                    nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam
                                    condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit
                                    non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit
                                    nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor.
                                    Nulla a erat et orci mattis auctor.</p>
                                <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
                                    amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
                                    nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
                                    interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                                    pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>
                            </div>
                            <div class="blog-details__bottom">
                                <p class="blog-details__tags">
                                    <span>Tags</span>
                                    <a href="#">Cleaning</a>
                                    <a href="#">House</a>
                                </p>
                                <div class="blog-details__social-list">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="far fa-user-circle"></i> by Admin</span>
                                                <a href="blog-details.html">Get tips to clean your washroom</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="far fa-user-circle"></i> by Admin</span>
                                                <a href="blog-details.html">Promoting the Rights of Children</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets_landing/images/blog/lp-1-3.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="far fa-user-circle"></i> by Admin</span>
                                                <a href="blog-details.html">Bring to the table win-win survival</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="blog-details.html">House Cleaning <span
                                                class="fa fa-angle-right"></span></a></li>
                                    <li class="active"><a href="blog-details.html">Apartment <span
                                                class="fa fa-angle-right"></span></a></li>
                                    <li><a href="blog-details.html">Windows <span class="fa fa-angle-right"></span></a>
                                    </li>
                                    <li><a href="blog-details.html">Office Cleaning <span
                                                class="fa fa-angle-right"></span></a></li>
                                    <li><a href="blog-details.html">Plumbing <span class="fa fa-angle-right"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">Cleaning</a>
                                    <a href="#">House</a>
                                    <a href="#">Office Clean</a>
                                    <a href="#">carpet</a>
                                    <a href="#">kitchen cleaning</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->
@endsection
