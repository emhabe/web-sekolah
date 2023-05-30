<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="/dashboard">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/pgri">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">PGRI</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="/bkk">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">BKK</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="/manajemen">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm"></i>
            </div>
            <span class="nav-link-text ms-1">Manajemen</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/jurusan">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm"></i>
            </div>
            <span class="nav-link-text ms-1">Jurusan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/berita">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm"></i>
            </div>
            <span class="nav-link-text ms-1">Berita</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/budaya_sekolah_admin">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm"></i>
            </div>
            <span class="nav-link-text ms-1">Budaya Sekolah</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/data_master">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm"></i>
            </div>
            <span class="nav-link-text ms-1">Data Master</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link   " href="/galeri">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm"></i>
            </div>
            <span class="nav-link-text ms-1">Galeri</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link   " href="/organisasi">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-dark text-sm"></i>
            </div>
            <span class="nav-link-text ms-1">Organisasi</span>
          </a>
        </li>
       
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Data Master</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Data Master</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
           
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            
         
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
    <!-- ATAS -->
      <div class="row mt-4">
      <div class="col-md-12">
      <div class="card overflow-scroll">
<div class="card-body d-flex">
<div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
<button onclick="toggleCard()" class="avatar avatar-lg rounded-circle border  bg-gradient-primary">
<i class="fas fa-plus text-white"></i>
</button>
<p class="mb-0 text-sm" style="margin-top:6px;">Guru</p>
</div>
<div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
<button onclick="pegawai()" class="avatar avatar-lg rounded-circle border  bg-gradient-primary">
<i class="fas fa-plus text-white"></i>
</button>
<p class="mb-0 text-sm" style="margin-top:6px;">Pegawai</p>
</div>
<div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
<button onclick="jurusan()" class="avatar avatar-lg rounded-circle border  bg-gradient-primary">
<i class="fas fa-plus text-white"></i>
</button>
<p class="mb-0 text-sm" style="margin-top:6px;">Jurusan</p>
</div>
<div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
<button onclick="siswa()" class="avatar avatar-lg rounded-circle border  bg-gradient-primary">
<i class="fas fa-plus text-white"></i>
</button>
<p class="mb-0 text-sm" style="margin-top:6px;">Siswa</p>
</div><div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
<button onclick="ekskul()" class="avatar avatar-lg rounded-circle border  bg-gradient-primary">
<i class="fas fa-plus text-white"></i>
</button><p class="mb-0 text-sm" style="margin-top:6px;">Pengguna</p>
</div><div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
<button onclick="bkk()" class="avatar avatar-lg rounded-circle border  bg-gradient-primary">
<i class="fas fa-plus text-white"></i>
</button>
<p class="mb-0 text-sm" style="margin-top:6px;"> BKK</p>
</div><div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
<button onclick="humas()" class="avatar avatar-lg rounded-circle border  bg-gradient-primary">
<i class="fas fa-plus text-white"></i>
</button>
<p class="mb-0 text-sm" style="margin-top:6px;"> HUMAS</p>
</div><div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
<button onclick="kesiswaan()" class="avatar avatar-lg rounded-circle border  bg-gradient-primary">
<i class="fas fa-plus text-white"></i>
</button>
<p class="mb-0 text-sm" style="margin-top:6px;"> Kesiswaan</p>
</div><div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
<button onclick="kurikulum()" class="avatar avatar-lg rounded-circle border  bg-gradient-primary">
<i class="fas fa-plus text-white"></i>
</button>
<p class="mb-0 text-sm" style="margin-top:6px;"> Kurikulum</p>
</div><div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
<button onclick="rpltkj()" class="avatar avatar-lg rounded-circle border  bg-gradient-primary">
<i class="fas fa-plus text-white"></i>
</button>
<p class="mb-0 text-sm" style="margin-top:6px;"> RPL-TKJ</p>
</div><div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
<button onclick="toitei()" class="avatar avatar-lg rounded-circle border  bg-gradient-primary">
<i class="fas fa-plus text-white"></i>
</button>
<p class="mb-0 text-sm" style="margin-top:6px;"> TOI-TEI</p>
</div><div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
<button onclick="tkrtbsm()" class="avatar avatar-lg rounded-circle border  bg-gradient-primary">
<i class="fas fa-plus text-white"></i>
</button>
<p class="mb-0 text-sm" style="margin-top:6px;"> TKR-TBSM</p>
</div>
</div>
</div>
</div>
</div>
<!-- TABEL Guru -->
<div class="row mt-4">
        <div class="col-12">
          <div class="card mb-4" id="myCard" style="display: none;">
            <div class="card-header pb-0">
              <h6>Guru</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 "id="datatable-search">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- END TABEL Guru -->
<!-- TABEL Pegawai -->
<div class="row" >
        <div class="col-12">
          <div class="card mb-4" id="pegawai" style="display: none;">
            <div class="card-header pb-0">
              <h6>Pegawai</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 "id="tabelpegawai">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- END TABEL Pegawai -->
    <!-- TABEL Jurusan -->
    <div class="row" >
        <div class="col-12">
          <div class="card mb-4" id="jurusan" style="display: none;">
            <div class="card-header pb-0">
              <h6>Jurusan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 "id="tabeljurusan">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END TABEL Jurusan -->
    <!-- TABEL Siswa -->
    <div class="row" >
        <div class="col-12">
          <div class="card mb-4" id="siswa" style="display: none;">
            <div class="card-header pb-0">
              <h6>Siswa</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 "id="tabelsiswa">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END TABEL Siswa -->
    <!-- TABEL Pengguna -->
    <div class="row" >
        <div class="col-12">
          <div class="card mb-4" id="pengguna" style="display: none;">
            <div class="card-header pb-0">
              <h6>Pengguna</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 "id="tabelpengguna">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END TABEL Pengguna -->
    <!-- TABEL BKK -->
    <div class="row" >
        <div class="col-12">
          <div class="card mb-4" id="bkk" style="display: none;">
            <div class="card-header pb-0">
              <h6>Admin BKK</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 "id="tabelbkk">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END TABEL BKK -->
    <!-- TABEL HUMAS -->
    <div class="row" >
        <div class="col-12">
          <div class="card mb-4" id="humas" style="display: none;">
            <div class="card-header pb-0">
              <h6>Admin Humas</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 "id="tabelhumas">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END TABEL HUMAS -->
    <!-- TABEL KESISWAAN -->
    <div class="row" >
        <div class="col-12">
          <div class="card mb-4" id="kesiswaan" style="display: none;">
            <div class="card-header pb-0">
              <h6>Admin Kesiswaan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 "id="tabelkesiswaan">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END TABEL KESISWAAN -->
    <!-- TABEL KURIKULUM -->
    <div class="row" >
        <div class="col-12">
          <div class="card mb-4" id="kurikulum" style="display: none;">
            <div class="card-header pb-0">
              <h6>Admin Kurikulum</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 "id="tabelkurikulum">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END TABEL KURIKULUM -->
    <!-- TABEL RPL TKJ -->
    <div class="row" >
        <div class="col-12">
          <div class="card mb-4" id="rpltkj" style="display: none;">
            <div class="card-header pb-0">
              <h6>Admin RPL-TKJ</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 "id="tabelrpltkj">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END TABEL RPL TKJ -->
    <!-- TABEL TOI TEI -->
    <div class="row" >
        <div class="col-12">
          <div class="card mb-4" id="toitei" style="display: none;">
            <div class="card-header pb-0">
              <h6>Admin TOI-TEI</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 "id="tabeltoitei">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END TABEL TOI TEI -->
    <!-- TABEL TKR TBSM -->
    <div class="row" >
        <div class="col-12">
          <div class="card mb-4" id="tkrtbsm" style="display: none;">
            <div class="card-header pb-0">
              <h6>Admin TKR-TBSM</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 "id="tabeltkrtbsm">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-center text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle text-center">
                         <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                         <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END TABEL TKR TBSM -->
</div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/flatpickr.js"></script>
  <script src="../assets/js/plugins/datatables.js"></script>
  <script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
      searchable: true,
      fixedHeight: false
    });
  </script>
   <script>
    const tabelpegawai = new simpleDatatables.DataTable("#tabelpegawai", {
      searchable: true,
      fixedHeight: false
    });
  </script>
  <script>
    const tabeljurusan = new simpleDatatables.DataTable("#tabeljurusan", {
      searchable: true,
      fixedHeight: false
    });
  </script>
   <script>
    const tabelsiswa = new simpleDatatables.DataTable("#tabelsiswa", {
      searchable: true,
      fixedHeight: false
    });
  </script>
   <script>
    const tabelekskul = new simpleDatatables.DataTable("#tabelekskul", {
      searchable: true,
      fixedHeight: false
    });
  </script>
   <script>
    const tabelpengguna = new simpleDatatables.DataTable("#tabelpengguna", {
      searchable: true,
      fixedHeight: false
    });
  </script>
   <script>
    const tabelbkk = new simpleDatatables.DataTable("#tabelbkk", {
      searchable: true,
      fixedHeight: false
    });
  </script>
   <script>
    const tabelhumas = new simpleDatatables.DataTable("#tabelhumas", {
      searchable: true,
      fixedHeight: false
    });
  </script>
   <script>
    const tabelsiswakesiswaan = new simpleDatatables.DataTable("#tabelkesiswaan", {
      searchable: true,
      fixedHeight: false
    });
  </script>
   <script>
    const tabelkurikulum = new simpleDatatables.DataTable("#tabelkurikulum", {
      searchable: true,
      fixedHeight: false
    });
  </script>
   <script>
    const tabelrpltkj = new simpleDatatables.DataTable("#tabelrpltkj", {
      searchable: true,
      fixedHeight: false
    });
  </script>
   <script>
    const tabeltoitei = new simpleDatatables.DataTable("#tabeltoitei", {
      searchable: true,
      fixedHeight: false
    });
  </script>
   <script>
    const tabeltkrtbsm = new simpleDatatables.DataTable("#tabeltkrtbsm", {
      searchable: true,
      fixedHeight: false
    });
  </script>
  

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script>
   function toggleCard() {
  var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");

  if (card.style.display === "none") {
    pegawai.style.display = "none";
    siswa.style.display = "none";
    ekskul.style.display = "none";
    pengguna.style.display = "none";
    bkk.style.display = "none";
    kesiswaan.style.display = "none";
    humas.style.display = "none";
    kurikulum.style.display = "none";
    rpltkj.style.display = "none";
    toitei.style.display = "none";
    jurusan.style.display = "none";
    tkrtbsm.style.display = "none";
    card.style.display = "block";
  } else {
    card.style.display = "none";
  }
}
  </script>
  <script>
   function pegawai() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");

  if (pegawai.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "none";
    pegawai.style.display = "block";
    siswa.style.display = "none";
    ekskul.style.display = "none";
    pengguna.style.display = "none";
    bkk.style.display = "none";
    kesiswaan.style.display = "none";
    humas.style.display = "none";
    kurikulum.style.display = "none";
    rpltkj.style.display = "none";
    toitei.style.display = "none";
    tkrtbsm.style.display = "none";
  } else {
    pegawai.style.display = "none";
  }
}
  </script>
  <script>
   function jurusan() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");
  var card = document.getElementById("myCard");
  if (jurusan.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "block";
    pegawai.style.display = "none";
    siswa.style.display = "none";
    ekskul.style.display = "none";
    pengguna.style.display = "none";
    bkk.style.display = "none";
    kesiswaan.style.display = "none";
    humas.style.display = "none";
    kurikulum.style.display = "none";
    rpltkj.style.display = "none";
    toitei.style.display = "none";
    tkrtbsm.style.display = "none";
  } else {
    jurusan.style.display = "none";
  }
}
  </script>
     <script>
   function siswa() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");
  var card = document.getElementById("myCard");
  if (siswa.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "none";
    pegawai.style.display = "none";
    siswa.style.display = "block";
    ekskul.style.display = "none";
    pengguna.style.display = "none";
    bkk.style.display = "none";
    kesiswaan.style.display = "none";
    humas.style.display = "none";
    kurikulum.style.display = "none";
    rpltkj.style.display = "none";
    toitei.style.display = "none";
    tkrtbsm.style.display = "none";
  } else {
    siswa.style.display = "none";
  }
}
  </script>
  <script>
   function ekskul() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");
  var card = document.getElementById("myCard");
  if (ekskul.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "none";
    pegawai.style.display = "none";
    siswa.style.display = "none";
    ekskul.style.display = "block";
    pengguna.style.display = "none";
    bkk.style.display = "none";
    kesiswaan.style.display = "none";
    humas.style.display = "none";
    kurikulum.style.display = "none";
    rpltkj.style.display = "none";
    toitei.style.display = "none";
    tkrtbsm.style.display = "none";
  } else {
    ekskul.style.display = "none";
  }
}
  </script>
   <script>
   function pengguna() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");
  var card = document.getElementById("myCard");
  if (pengguna.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "none";
    pegawai.style.display = "none";
    siswa.style.display = "none";
    ekskul.style.display = "none";
    pengguna.style.display = "block";
    bkk.style.display = "none";
    kesiswaan.style.display = "none";
    humas.style.display = "none";
    kurikulum.style.display = "none";
    rpltkj.style.display = "none";
    toitei.style.display = "none";
    tkrtbsm.style.display = "none";
  } else {
    pengguna.style.display = "none";
  }
}
  </script>
   <script>
   function bkk() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");
  var card = document.getElementById("myCard");
  if (bkk.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "none";
    pegawai.style.display = "none";
    siswa.style.display = "none";
    ekskul.style.display = "none";
    pengguna.style.display = "none";
    bkk.style.display = "block";
    kesiswaan.style.display = "none";
    humas.style.display = "none";
    kurikulum.style.display = "none";
    rpltkj.style.display = "none";
    toitei.style.display = "none";
    tkrtbsm.style.display = "none";
  } else {
    bkk.style.display = "none";
  }
}
  </script>
   <script>
   function humas() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");
  var card = document.getElementById("myCard");
  if (humas.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "none";
    pegawai.style.display = "none";
    siswa.style.display = "none";
    ekskul.style.display = "none";
    pengguna.style.display = "none";
    bkk.style.display = "none";
    kesiswaan.style.display = "none";
    humas.style.display = "block";
    kurikulum.style.display = "none";
    rpltkj.style.display = "none";
    toitei.style.display = "none";
    tkrtbsm.style.display = "none";
  } else {
    humas.style.display = "none";
  }
}
  </script>
   <script>
   function kesiswaan() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");
  var card = document.getElementById("myCard");
  if (kesiswaan.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "none";
    pegawai.style.display = "none";
    siswa.style.display = "none";
    ekskul.style.display = "none";
    pengguna.style.display = "none";
    bkk.style.display = "none";
    kesiswaan.style.display = "block";
    humas.style.display = "none";
    kurikulum.style.display = "none";
    rpltkj.style.display = "none";
    toitei.style.display = "none";
    tkrtbsm.style.display = "none";
  } else {
    kesiswaan.style.display = "none";
  }
}
  </script>
   <script>
   function kurikulum() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");
  var card = document.getElementById("myCard");
  if (kurikulum.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "none";
    pegawai.style.display = "none";
    siswa.style.display = "none";
    ekskul.style.display = "none";
    pengguna.style.display = "none";
    bkk.style.display = "none";
    kesiswaan.style.display = "none";
    humas.style.display = "none";
    kurikulum.style.display = "block";
    rpltkj.style.display = "none";
    toitei.style.display = "none";
    tkrtbsm.style.display = "none";
  } else {
    kurikulum.style.display = "none";
  }
}
  </script>
   <script>
   function kurikulum() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");
  var card = document.getElementById("myCard");
  if (kurikulum.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "none";
    pegawai.style.display = "none";
    siswa.style.display = "none";
    ekskul.style.display = "none";
    pengguna.style.display = "none";
    bkk.style.display = "none";
    kesiswaan.style.display = "none";
    humas.style.display = "none";
    kurikulum.style.display = "block";
    rpltkj.style.display = "none";
    toitei.style.display = "none";
    tkrtbsm.style.display = "none";
  } else {
    kurikulum.style.display = "none";
  }
}
  </script>
   <script>
   function rpltkj() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");
  var card = document.getElementById("myCard");
  if (rpltkj.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "none";
    pegawai.style.display = "none";
    siswa.style.display = "none";
    ekskul.style.display = "none";
    pengguna.style.display = "none";
    bkk.style.display = "none";
    kesiswaan.style.display = "none";
    humas.style.display = "none";
    kurikulum.style.display = "none";
    rpltkj.style.display = "block";
    toitei.style.display = "none";
    tkrtbsm.style.display = "none";
  } else {
    rpltkj.style.display = "none";
  }
}
  </script>
   <script>
   function toitei() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");
  var card = document.getElementById("myCard");
  if (toitei.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "none";
    pegawai.style.display = "none";
    siswa.style.display = "none";
    ekskul.style.display = "none";
    pengguna.style.display = "none";
    bkk.style.display = "none";
    kesiswaan.style.display = "none";
    humas.style.display = "none";
    kurikulum.style.display = "none";
    rpltkj.style.display = "none";
    toitei.style.display = "block";
    tkrtbsm.style.display = "none";
  } else {
    toitei.style.display = "none";
  }
}
  </script>
   <script>
   function tkrtbsm() {
    var card = document.getElementById("myCard");
  var pegawai = document.getElementById("pegawai");
  var siswa = document.getElementById("siswa");
  var ekskul = document.getElementById("ekskul");
  var pengguna = document.getElementById("pengguna");
  var bkk = document.getElementById("bkk");
  var humas = document.getElementById("humas");
  var kesiswaan = document.getElementById("kesiswaan");
  var kurikulum = document.getElementById("kurikulum");
  var rpltkj = document.getElementById("rpltkj");
  var toitei = document.getElementById("toitei");
  var tkrtbsm = document.getElementById("tkrtbsm");
  var jurusan = document.getElementById("jurusan");
  var card = document.getElementById("myCard");
  if (tkrtbsm.style.display === "none") {
    card.style.display = "none";
    jurusan.style.display = "none";
    pegawai.style.display = "none";
    siswa.style.display = "none";
    ekskul.style.display = "none";
    pengguna.style.display = "none";
    bkk.style.display = "none";
    kesiswaan.style.display = "none";
    humas.style.display = "none";
    kurikulum.style.display = "none";
    rpltkj.style.display = "none";
    toitei.style.display = "none";
    tkrtbsm.style.display = "block";
  } else {
    tkrtbsm.style.display = "none";
  }
}
  </script>
  
 
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>