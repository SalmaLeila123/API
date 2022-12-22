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
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Halaman
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
                    
                    
<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="halaman.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>NPK</td>
                <td><input type="text" name="npk"></td>
            </tr>
            <tr> 
                <td>Nama Karyawan</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Departemen</td>
                <td><input type="text" name="dept"></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tgl"></td>
            </tr>
            <tr> 
                <td>Jam Mulai</td>
                <td><input type="time" name="jam_mulai"></td>
            </tr>
            <tr> 
                <td>Jam Selesai</td>
                <td><input type="time" name="jam_selesai"></td>
            </tr>
            <tr> 
                <td>Mulai Istirahat 1</td>
                <td><input type="time" name="m_istirahat_a"></td>
            </tr>
            <tr> 
                <td>Selesai Istirahat 1</td>
                <td><input type="time" name="s_istirahat_a"></td>
            </tr>
            <tr> 
                <td>Mulai Istirahat 2</td>
                <td><input type="time" name="m_istirahat_b"></td>
            </tr>
            <tr> 
                <td>Selesai Istirahat 2</td>
                <td><input type="time" name="s_istirahat_b"></td>
            </tr>
            <tr> 
                <td>Jam Lembur</td>
                <td><input type="text" name="jam_lembur"></td>
            </tr>
            <div class="form-group">
                        <label>Hari Libur / Kerja</label>
                        <div class="form-group">
                         <div class="form-line">
                            <select name="hari_lk" class="form-control show-tick">
                                <option value="">-- Pilih --</option>
                                <option value="WORK DAY">WORK DAY</option>
                                <option value="DAY OFF">DAY OFF</option>
                            </select>
                        </div>
                    </div>

                    <tr> 
            <td>Total Tuul</td>
                <td><input type="text" name="total_tuul"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
  
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $npk = $_POST['npk'];
        $nama= $_POST['nama'];
        $dept = $_POST['dept'];
        $tgl = $_POST['tgl'];
        $jam_mulai = $_POST['jam_mulai'];
        $jam_selesai = $_POST['jam_selesai'];
        $m_istirahat_a = $_POST['m_istirahat_a'];
        $s_istirahat_a = $_POST['s_istirahat_a'];
        $m_istirahat_b = $_POST['m_istirahat_b'];
        $s_istirahat_b= $_POST['s_istirahat_b'];
        $jam_lembur = $_POST['jam_lembur'];
        $hari_lk = $_POST['hari_lk'];
        $total_tuul = $_POST['total_tuul'];

        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(
            npk,nama,dept,tgl,jam_mulai,jam_selesai,m_istirahat_a,s_istirahat_a,m_istirahat_b,s_istirahat_b,jam_lembur,hari_lk,total_tuul) VALUES(
            '$npk','$nama','$dept','$tgl','$jam_mulai','$jam_selesai','$m_istirahat_a','$s_istirahat_a','$m_istirahat_b','$s_istirahat_b','$jam_lembur','$hari_lk','$total_tuul')");
        
        if ($result) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $result . "<br>" . $mysqli->error;
          }
          
         
    }
    ?>
</body>
</html>