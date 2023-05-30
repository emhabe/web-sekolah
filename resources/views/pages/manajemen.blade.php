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
          <a class="nav-link  active" href="/manajemen">
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
          <a class="nav-link" href="/data_master">
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Manajemen</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Manajemen</h6>
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
      <div class="row">
        <div class="row mt-4">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Manajemen</h6>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">Kurikulum</h6>
                    <span class="mb-2 text-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, ex? Molestiae incidunt aperiam dolor, possimus dolores totam inventore voluptas quae.</span>
                  </div>
                  <div class="ms-auto text-end">
                    
                    <button class="btn btn-link text-dark px-3 mb-0"  data-bs-toggle="modal" data-bs-target="#modal-form"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</button>
                    <!-- MODAL 1 -->
                    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-md" role="document">
          <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-center">
                <h3 class="font-weight-bolder text-primary text-gradient">Kurikulum</h3>
                <p class="mb-0">Silahkan Isi Kurikulum</p>
              </div>
              <div class="card-body">
                <form role="form text-left">
                
                  <div id="editor"></div>
                 
                
                  <div class="text-center">
                    <button type="button" class="btn btn-round bg-gradient-primary btn-lg w-100 mt-4 mb-0">Submit</button>
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
                    <!-- END MODAL 1 -->
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">Kesiswaan</h6>
                    <span class="mb-2 text-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, ex? Molestiae incidunt aperiam dolor, possimus dolores totam inventore voluptas quae.</span>
                  </div>
                  <div class="ms-auto text-end">

                  <button class="btn btn-link text-dark px-3 mb-0"  data-bs-toggle="modal" data-bs-target="#modal-form1"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</button>
                  <!-- MODAL 2 -->
                  <div class="modal fade" id="modal-form1" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-md" role="document">
          <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-center">
                <h3 class="font-weight-bolder text-primary text-gradient">Kesiswaan</h3>
                <p class="mb-0">Silahkan Isi Kesiswaan</p>
              </div>
              <div class="card-body">
                <form role="form text-left">
                
                  <div id="editor2"></div>
                 
                
                  <div class="text-center">
                    <button type="button" class="btn btn-round bg-gradient-primary btn-lg w-100 mt-4 mb-0">Submit</button>
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
                  <!-- END MODAL 2 -->
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">Humas</h6>
                    <span class="mb-2 text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus quasi minus pariatur natus, beatae, iure doloremque sapiente unde accusantium nihil deleniti voluptatem saepe quidem ipsa aliquam, adipisci libero debitis. Tempore?</span>
                   
                  </div>
                  <div class="ms-auto text-end">
                   
                  <button class="btn btn-link text-dark px-3 mb-0"  data-bs-toggle="modal" data-bs-target="#modal-form2"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</button>
                  <!-- MODAL 3  -->
                  <div class="modal fade" id="modal-form2" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-md" role="document">
          <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-center">
                <h3 class="font-weight-bolder text-primary text-gradient">Humas</h3>
                <p class="mb-0">Silahkan Isi Humas</p>
              </div>
              <div class="card-body">
                <form role="form text-left">
                
                  <div id="editor3"></div>
                 
                
                  <div class="text-center">
                    <button type="button" class="btn btn-round bg-gradient-primary btn-lg w-100 mt-4 mb-0">Submit</button>
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
                  <!-- END MODAL 3 -->
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">Sarana Prasarana</h6>
                    <span class="mb-2 text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, voluptatem.</span>
                    
                  </div>
                  <div class="ms-auto text-end">
                   
                  <button class="btn btn-link text-dark px-3 mb-0"  data-bs-toggle="modal" data-bs-target="#modal-form3"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</button>
                  <!-- MODAL 3 -->
                  <div class="modal fade" id="modal-form3" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-md" role="document">
          <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-center">
                <h3 class="font-weight-bolder text-primary text-gradient">Sarana Prasarana</h3>
                <p class="mb-0">Silahkan Isi Sarana Prasarana</p>
              </div>
              <div class="card-body">
                <form role="form text-left">
                
                  <div id="editor4"></div>
                 
                
                  <div class="text-center">
                    <button type="button" class="btn btn-round bg-gradient-primary btn-lg w-100 mt-4 mb-0">Submit</button>
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END MODAL 3 -->
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">Tata Usaha</h6>
                    <span class="mb-2 text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam odit praesentium non eveniet error eligendi tenetur iure sequi dolorum rerum nesciunt natus repellendus veritatis, obcaecati voluptates cumque laudantium nulla perferendis consequatur in quaerat unde sapiente? Praesentium, odio nihil? Quo, quia.</span>
                    
                  </div>
                  <div class="ms-auto text-end">
       
                  <button class="btn btn-link text-dark px-3 mb-0"  data-bs-toggle="modal" data-bs-target="#modal-form4"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</button>
                  <!-- MODAL 4 -->
                  <div class="modal fade" id="modal-form4" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-md" role="document">
          <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-center">
                <h3 class="font-weight-bolder text-primary text-gradient">Tata Usaha</h3>
                <p class="mb-0">Silahkan Isi Tata Usaha</p>
              </div>
              <div class="card-body">
                <form role="form text-left">
                
                  <div id="editor5"></div>
                 
                
                  <div class="text-center">
                    <button type="button" class="btn btn-round bg-gradient-primary btn-lg w-100 mt-4 mb-0">Submit</button>
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
                  <!-- END MODAL 4 -->
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
      
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
      fixedHeight: true
    });
  </script>
  <script>
    if (document.querySelector('.datetimepicker')) {
      flatpickr('.datetimepicker', {
        allowInput: true,
        minDate:"today",
      }); // flatpickr
    }
    Dropzone.autoDiscover = false;
    var drop = document.getElementById('dropzone')
    var myDropzone = new Dropzone(drop, {
      url: "/file/post",
      addRemoveLinks: true

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
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor3' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor4' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor5' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>