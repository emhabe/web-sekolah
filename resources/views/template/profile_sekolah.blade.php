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
                <h2>Profile Sekolah </h2>
            </div>
        </div>
    </section>
    <!--Portfolio Details Start-->
    <section class="portfolio-details">

        <div class="container">
            <div class="slider">
                <ul class="items">
                    <li class="item current"><img
                            src="{{asset('assets_landing/images/gambar1.jpg')}}"></li>
                    <li class="item"><img
                            src="https://codeisle.info/blog/wp-content/uploads/2018/12/kilimanjaro-5895.jpg"></li>
                    <li class="item"><img
                            src="https://codeisle.info/blog/wp-content/uploads/2018/12/aconcagua-6962.jpg">
                    </li>
                    <li class="item"><img
                            src="https://codeisle.info/blog/wp-content/uploads/2018/12/matterhorn-4478.jpg"></li>
                </ul>
                <div class="buttons">
                    <button type="button" id="prev" class="buttonss prev"></button>
                    <button type="button" id="next" class="buttonss next"></button>
                </div>
            </div>
            <div class="row">
                <script>
                    function slider(flag, num) {
                        var current = $(".item.current"),
                            next,
                            index;
                        if (!flag) {
                            next = current.is(":last-child") ? $(".item").first() : current.next();
                            index = next.index();
                        } else if (flag === "dot") {
                            next = $(".item").eq(num);
                            index = num;
                        } else {
                            next = current.is(":first-child") ? $(".item").last() : current.prev();
                            index = next.index();
                        }
                        next.addClass("current");
                        current.removeClass("current");
                        $(".dot").eq(index).addClass("current").siblings().removeClass("current");
                    }
                    var setSlider = setInterval(slider, 4000);

                    $(".buttonss").on("click", function() {
                        clearInterval(setSlider);
                        var flag = $(this).is(".prev") ? true : false;
                        slider(flag);
                        setSlider = setInterval(slider, 4000);
                    });

                    $(".dot").on("click", function() {
                        if ($(this).is(".current")) return;
                        clearInterval(setSlider);
                        var num = $(this).index();
                        slider("dot", num);
                        setSlider = setInterval(slider, 4000);
                    });
                </script>
                <div class="col-xl-12">
                    <div class="portfolio-details__content-one">
                        <h3>Profile SMK PGRI Singosari</h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                            dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet
                            finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book. It
                            has survived not only five centuries. Lorem Ipsum is simply dummy text of the new design
                            printng and type setting Ipsum Take a look at our round up of the best shows coming soon
                            to your telly box has been the is industrys. When an unknown printer took a galley of
                            type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                            containing.</p>
                    </div>
                    <div class="portfolio-details__content-two">
                        <p>Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book. It
                            has survived not only five centuries. Lorem Ipsum is simply dummy text of the new design
                            printng and type setting Ipsum Take a look at our round up of the best shows coming soon
                            to your telly box has been the is industrys.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Portfolio Details End-->
@endsection
