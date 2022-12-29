<!DOCTYPE html>
<html>
<?php
include 'dbconnect.php';
include 'cek.php';


$page = $_SERVER['PHP_SELF'];
$sec = "30";




// $dbconnect = new mysqli("localhost","root","","overtime");

// if(empty($_SESSION['superadmin'])){

//     header("location:index.php");
// }

?>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Data Overtime</title>
    <script type="js/progress.js"></script>
    <link href="css/progres.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">HR/GA</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="seting.html">Settings</a>
                    <div class="dropdown-divider btn-primary"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <br>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="tambahdata.php">Tambah Data Karyawan</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            User
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="tambahuser.php">Tambah User</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    HR/GA
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <h2>Progress Bar</h2>
                    <br>
                    <br>
                    <br>
                    <br>

                    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <!------ Include the above in your HEAD tag ---------->

                    <div class="container">
                        <div class="row text-center">


                            <div class="col-sm-4">
                                <div class="progressbar">
                                    <div class="second circle" data-percent="70">
                                      <strong></strong>
                                      <span><br>HARI INI</span>
                                  </div>
                              </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="progressbar">
                                <div class="second circle" data-percent="50">
                                  <strong></strong>
                                  <span><br>BULAN INI</span>
                              </div>
                          </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="progressbar">
                            <div class="second circle" data-percent="100">
                              <strong></strong>
                              <span><br>TAHUN INI</span>
                          </div>
                      </div>
                  </div>




              </div>
          </div>
          <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>


      </div>
  </main>
  <footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">PT. Autoplastik Indonesia</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function ($) {
        function animateElements() {
            $('.progressbar').each(function () {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find('.circle').attr('data-percent');
                var animate = $(this).data('animate');
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data('animate', true);
                    $(this).find('.circle').circleProgress({
                    // startAngle: -Math.PI / 2,
                        value: percent / 100,
                        size : 400,
                        thickness: 15,
                        fill: {
                            color: '#663399'
                        }
                    }).on('circle-animation-progress', function (event, progress, stepValue) {
                        $(this).find('strong').text((stepValue*100).toFixed(0) + "%");
                    }).stop();
                }
            });
        }

        animateElements();
        $(window).scroll(animateElements);
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
</body>
</html>
