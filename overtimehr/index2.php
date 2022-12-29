<?php
include 'config.php';
// include 'cek.php';


if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $npk=$_POST['npk'];
    $nama=$_POST['nama'];
    $dept=$_POST['dept'];
    $sct=$_POST['section'];
    $instansi=$_POST['instansi'];
    $tgl=$_POST['tgl'];
    $jam_mulai=$_POST['jam_mulai'];
    $jam_selesai=$_POST['jam_selesai'];
    $m_istirahat_a=$_POST['m_istirahat_a'];
    $m_istirahat_b=$_POST['m_istirahat_b'];
    $s_istirahat_a=$_POST['s_istirahat_a'];
    $s_istirahat_b=$_POST['s_istirahat_b'];
    $jam_lembur=$_POST['jam_lembur'];
    $hari_lk=$_POST['hari_lk'];
    $total_tuul=$_POST['total_tuul'];


    $updatedata = mysqli_query($conn, "UPDATE dataovt SET npk='$npk', nama='$nama', dept='$dept', sct='$section', instansi='$instansi', tgl='$tgl', jam_mulai='$jam_mulai', jam_selesai='$jam_selesai', m_istirahat_a='$m_istirahat_a', s_istirahat_a='$s_istirahat_a', m_istirahat_b='$m_istirahat_b', s_istirahat_b='$s_istirahat_b', jam_lembur='$jam_lembur', hari_lk='$hari_lk', total_tuul='$total_tuul' where id='$id'");


    //cek apakah berhasil
    if ($updatedata) {

        header("location: tambahdata.php");

    } else {

        echo "Data Gagal Update!";

    }
};

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $delete = mysqli_query($conn, "DELETE from dataovt where id='$id'");

    //cek apakah berhasil
    if ($delete) {

        header("location: tambahdata.php");

    } else {

        echo "Data Gagal Update!";

    }
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tabel Data Karywan</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    <style type="text/css">
        table, td, th {
          border: 1px solid black;
      }

      table {
          border-collapse: collapse;
          width: 100%;
      }

      td, tr {
          text-align: center;
      }
  </style>

</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Data Overtime</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
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
                        <a class="nav-link" href="halaman.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                       
                       
                     
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="tambahdata.php">Tambah Data Karyawan</a>
                            </nav>
                        </div>
                       
                    </div>
                </div>
                <div class="sb-sidenav-footer">Pages
                    <div class="small">Logged in as:</div>
                    HR/GA
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Overtime Recapitulation Data</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Data Karyawan</li>
                    </ol>
                    <div class="card mb-1">
                        <form method="post" enctype="multipart/form-data" action="proses_upload.php">
                            Pilih File:
                            <input class="form-control" name="fileexcel" type="file" required="required">
                            <br>
                            <button class="btn btn-sm btn-warning" style="margin-left:10px;" type="submit">Submit</button>
                        </form>
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Data Tabel Karyawan
                            
                            </button>
                            <a href="export.php" target="_blank" class="btn btn-info">Export Data</a>
                        </div>
<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New User</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>NPK</th> <th>Nama Karyawan</th> <th>Departemen</th> <th>Tanggal</th> <th>Jam Mulai</th> <th>Jam Selesai</th> <th>Mulai Istirahat 1</th> <th>Selesai Istirahat 1</th> <th>Mulai Istirahat 2</th> <th>Selesai Istirahat 2</th> <th>Jam Lembur</th><th>Hari Libur/Kerja</th> <th>Total Tuul</th> <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['npk']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['dept']."</td>";  
        echo "<td>".$user_data['tgl']."</td>";
        echo "<td>".$user_data['jam_mulai']."</td>";
        echo "<td>".$user_data['jam_selesai']."</td>";  
        echo "<td>".$user_data['m_istirahat_a']."</td>";
        echo "<td>".$user_data['s_istirahat_a']."</td>";
        echo "<td>".$user_data['m_istirahat_b']."</td>";  
        echo "<td>".$user_data['s_istirahat_b']."</td>";
        echo "<td>".$user_data['jam_lembur']."</td>";
        echo "<td>".$user_data['hari_lk']."</td>";  
        echo "<td>".$user_data['total_tuul']."</td>";
        

        echo "<td><a href='edit.php?npk=$user_data[npk]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>