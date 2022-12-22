<?php
// include database connection file
include_once("dbconnect.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
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
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET 
    npk='$npk',
    nama='$nama',
    dept='$dept', 
    tgl='$tgl',
    jam_mulai='$jam_mulai',
    jam_selesai='$jam_selesai',
    m_istirahat_a='$m_istirahat_a',
    s_istirahat_a='$s_istirahat_a',
    m_istirahat_b='$s_istirahat_b',
    jam_lembur='$jam_lembur',
    hari_lk='$hari_lk',
    total_tuul='$total_tuul'
     WHERE npk='$npk'");
    
    // Redirect to homepage to display updated user in list
    header("Location: tambahdata.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$npk = $_GET['npk'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE npk='$npk'");
 
while($user_data = mysqli_fetch_array($result))
{
    $npk = $user_data['npk'];
    $nama = $user_data['nama'];
    $dept = $user_data['dept'];
    $tgl = $user_data['tgl'];
    $jam_mulai = $user_data['jam_mulai'];
    $jam_selesai = $user_data['jam_selesai'];
    $m_istirahat_a = $user_data['m_istirahat_a'];
    $s_istirahat_a = $user_data['s_istirahat_a'];
    $m_istirahat_b = $user_data['m_istirahat_b'];
    $s_istirahat_b = $user_data['s_istirahat_b'];
    $jam_lembur = $user_data['jam_lembur'];
    $hari_lk = $user_data['hari_lk'];
    $total_tuul = $user_data['total_tuul'];

}
?>
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
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Master Data</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Form
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="tambahdata.php">Tambah Data Karyawan</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
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
                    <h1 class="mt-4"></h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Form</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                  
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
     <a href="tambahdata.php" class="btn btn-sm btn-info">Kembali</a>
    <br/><br/>
 
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
        <tr> 
                <td>NPK</td>
                <td><input type="text" name="npk" value=<?php echo $npk;?>></td>
            </tr>
            <tr> 
                <td>Nama Karyawan</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Departemen</td>
                <td><input type="text" name="dept"value=<?php echo $dept;?>></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tgl"value=<?php echo $tgl;?>></td>
            </tr>
            <tr> 
                <td>Jam Mulai</td>
                <td><input type="time" name="jam_mulai"value=<?php echo $jam_mulai;?>></td>
            </tr>
            <tr> 
                <td>Jam Selesai</td>
                <td><input type="time" name="jam_selesai" value=<?php echo $jam_selesai;?>></td>
            </tr>
            <tr> 
                <td>Mulai Istirahat 1</td>
                <td><input type="time" name="m_istirahat_a" value=<?php echo $m_istirahat_a;?>></td>
            </tr>
            <tr> 
                <td>Selesai Istirahat 1</td>
                <td><input type="time" name="s_istirahat_a" value=<?php echo $s_istirahat_a;?>></td>
            </tr>
            <tr> 
                <td>Mulai Istirahat 2</td>
                <td><input type="time" name="m_istirahat_b" value=<?php echo $m_istirahat_b;?>></td>
            </tr>
            <tr> 
                <td>Selesai Istirahat 2</td>
                <td><input type="time" name="s_istirahat_b" value=<?php echo $s_istirahat_b;?>></td>
            </tr>
            <tr> 
                <td>Jam Lembur</td>
                <td><input type="text" name="jam_lembur" value=<?php echo $jam_lembur;?>></td>
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
                <td><input type="text" name="total_tuul" value=<?php echo $total_tuul;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="npk" value=<?php echo $_GET['npk'];?>></td>
                <td><input class="btn btn-sm btn-info" style="margin-left:1000px;" type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>