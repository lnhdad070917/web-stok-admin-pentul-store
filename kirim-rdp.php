<?php
session_start();
$username = $_SESSION['username'];
if (empty($_SESSION['username'])) {
  header("location:pages-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Editors - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
            <!-- Help <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>-->
            <li>
              <a href="action/logout.php" class="dropdown-item d-flex align-items-center">
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

          <!--<li>
              <a href="forms-editors.html">
                <i class="bi bi-circle"></i><span>Form Editors</span>
              </a>
            </li>
            <li>
              <a href="forms-validation.html">
                <i class="bi bi-circle"></i><span>Form Validation</span>
              </a>
            </li>-->

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
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>FORM KIRIM RDP</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Editors</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Untuk Pemesanan DISCORD</h5>

              <!-- Quill Editor Default -->
              <div class="quill-editor-default">
                <?php
                include 'koneksi.php';
                $nomor = $_GET['nomor'];
                $data = mysqli_query($koneksi, "SELECT*FROM rdp WHERE nomor='$nomor'");
                while ($hasil = mysqli_fetch_array($data)) {
                ?>

                  <p>Terimakasih Sudah Berbelanja di PENTUL_STORE</p>
                  <p>Panel <?php echo $hasil['panel']; ?> </p>
                  <p>IP : ||<?php echo $hasil['ip']; ?>|| </p>
                  <p>ID : ||<?php echo $hasil['username']; ?>|| </p>
                  <p>PASS : ||<?php echo $hasil['pass1']; ?>|| </p>
                  <p>PASS : ||<?php echo $hasil['pass2']; ?>|| </p>
                  <p>note : </p>
                  <p>1. Garansi 7 hari, berupa penggantian akun baru</p>
                  <p>2. Langsung sampaikan jika ada kendala</p>
                  <p>3. Pembelian RDP + lisensi, silahakn registerkan sendiri, lisensi ada di file lisensi.txt</p>
                <?php } ?>
              </div>
              <!-- End Quill Editor Default -->

            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Untuk Pemesanan WA/Shopee</h5>

              <!-- Quill Editor Full -->
              <div class="quill-editor-full">
                <?php
                include 'koneksi.php';
                $nomor = $_GET['nomor'];
                $data = mysqli_query($koneksi, "SELECT*FROM rdp WHERE nomor='$nomor'");
                while ($hasil = mysqli_fetch_array($data)) {
                ?>

                  <p>Terimakasih Sudah Berbelanja di PENTUL_STORE</p>
                  <p>Panel <?php echo $hasil['panel']; ?> </p>
                  <p>IP : <?php echo $hasil['ip']; ?> </p>
                  <p>ID : <?php echo $hasil['username']; ?> </p>
                  <p>PASS : <?php echo $hasil['pass1']; ?> </p>
                  <p>PASS : <?php echo $hasil['pass2']; ?> </p>
                  <p>note : </p>
                  <p>1. Garansi 7 hari, berupa penggantian akun baru</p>
                  <p>2. Langsung sampaikan jika ada kendala</p>
                  <p>3. Pembelian RDP + lisensi, silahakn registerkan sendiri, lisensi ada di file lisensi.txt</p>
                <?php } ?>
              </div>
              <!-- End Quill Editor Full -->
            </div>
          </div>
        </div>
        <div class="col-12">
          <a href="tables-ready-rdp.php">
            <button class="btn btn-outline-dark w-20" href="register.php" type="button">Back</button></a>
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