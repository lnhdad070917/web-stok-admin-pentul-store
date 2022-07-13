<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms RDP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/pentul1.png" rel="icon">
  <link href="assets/img/pentul1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/pentul1.png" alt="">
        <span class="d-none d-lg-block">PENTUL STORE</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!--<img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">-->
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php
                                                                    echo $username;
                                                                    ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $username; ?></span></h6><!-- Pake PHP -->
              <span>Web Designer</span><!-- Pake PHP ambil dari database -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a href = "action/logout.php" class="dropdown-item d-flex align-items-center">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
    <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="forms-rdp.php">
          <i class="bi bi-circle"></i><span>RDP</span>
        </a>
      </li>
      <li>
        <a href="forms-panel.php">
          <i class="bi bi-circle"></i><span>Panel</span>
        </a>
      </li>

    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#rdp-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>RDP</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="rdp-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="tables-ready-rdp.php">
          <i class="bi bi-circle"></i><span>Ready</span>
        </a>
      </li>
      <li>
        <a href="tables-sold-rdp.php">
          <i class="bi bi-circle"></i><span>Sold</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#panel-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>PANEL</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="panel-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="tables-ready-panel.php">
          <i class="bi bi-circle"></i><span>Ready</span>
        </a>
      </li>
      <li>
        <a href="tables-sold-panel.php">
          <i class="bi bi-circle"></i><span>Sold</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->
</ul>
</aside><!-- End Sidebar-->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>EDIT DATA RDP</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Silahkan isi Form</h5>
              <?php
              include 'koneksi.php';
              $nomor = $_GET['nomor'];
              $data = mysqli_query($koneksi, "SELECT*FROM rdp WHERE nomor='$nomor'");
              while ($hasil = mysqli_fetch_array($data)) {
              ?>
              <!-- General Form Elements -->
              <form action = "action/edit-rdp-sold.php">
                <div class="row mb-3">
                  <label for="cnomor" class="col-sm-2 col-form-label">Nomor</label>
                  <div class="col-sm-10">
                    <input type="text" readonly value="<?php echo $hasil['nomor']; ?>" id = "cnomor" name = "nomor" class="form-control" >
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="cpanel" class="col-sm-2 col-form-label">Panel</label>
                  <div class="col-sm-10">
                    <select id = "cpanel" name = "panel" class="form-control">
                      <option selected><?php echo $hasil['panel']; ?></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="cip" class="col-sm-2 col-form-label">IP RDP</label>
                  <div class="col-sm-10">
                    <input id = "cip" type="text" name = "ip" class="form-control" value="<?php echo $hasil['ip']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="cspec" class="col-sm-2 col-form-label">Spesifikasi</label>
                  <div class="col-sm-10">
                    <select id = "cspec" class="form-select" name = "spec" aria-label="Default select example">
                      <option selected><?php echo $hasil['spec']; ?></option>
                      <option value="1/2">1/2</option>
                      <option value="2/4">2/4</option>
                      <option value="4/16">4/16</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="cusername" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <select class="form-select" id = "cusername" name = "username" aria-label="Default select example">
                      <option selected><?php echo $hasil['username']; ?></option>
                      <option value="tulstore1">tulstore1</option>
                      <option value="tulstore2">tulstore2</option>
                      <option value="tulstore3">tulstore3</option>
                      <option value="tulstore4">tulstore4</option>
                      <option value="tulstore5">tulstore5</option>
                      <option value="tulstore6">tulstore6</option>
                      <option value="tulstore7">tulstore7</option>
                      <option value="tulstore8">tulstore8</option>
                      <option value="tulstore9">tulstore9</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="cpass1" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    
                    <div class="form-check">
                      <input id = "cpass1" name ="pass1" class="form-check-input" type="checkbox" value = "PentulStore//" required>
                      <label class="form-check-label" for="gridCheck1">
                        PentulStore//
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="cpass2" class="col-sm-2 col-form-label">Password 2</label>
                  <div class="col-sm-10">
                    <input type="text" id = "cpass2" name = "pass2" class="form-control" value="<?php echo $hasil['pass2']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="cdate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" id = "cdate" name = "date" class="form-control" value="<?php echo $hasil['date']; ?>" >
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="cstatus" class="col-sm-2 col-form-label">Ready/Sold</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="cstatus" name = "status" aria-label="Default select example">
                      <option selected><?php echo $hasil['status']; ?></option>
                      <option value="ready">Ready</option>
                      <option value="sold">Sold</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-warning">EDIT</button>
                    <button type="submit" class="btn btn-danger">CANCEL</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
              <?php } ?>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>