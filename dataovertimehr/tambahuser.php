<?php
include 'dbconnect.php';
// include 'cek.php';


if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $telepon=$_POST['telepon'];
    $username=$_POST['username'];
    $password=($_POST['password']);
    $level=$_POST['level'];


    $updatedata = mysqli_query($conn, "UPDATE users SET nik='$nik', nama='$nama', telepon='$telepon', username='$username', password='$password', level='$level' WHERE id='$id'");

    //cek apakah berhasil
    if ($updatedata) {

        header("location: tambahuser.php");

    } else {

        echo "Data Gagal Update!";

    }
};

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $delete = mysqli_query($conn, "DELETE from users where id='$id'");

    //cek apakah berhasil
    if ($delete) {

        header("location: tambahuser.php");

    } else {

        echo "Data Gagal Update!";

    }
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/styles.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tabel Data Users</title>
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
                    <h1 class="mt-4">Tabel Data Users</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                    <div class="card mb-4">
                    </div>
                    <div class="card mb-4">
                        <button type="button" class="btn btn-primary col-md-2 mt-3" style="margin-left: 1% ;" data-toggle="modal" data-target="#myModal">
                            Tambah Data
                        </button>
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Data Tabel Karyawan
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Telepon</th>
                                            <th>Username</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        $sql = $conn->query("SELECT * FROM users order by nama ASC");
                                        while ($data = $sql->fetch_assoc()) {
                                            $id =$data['id'];
                                            ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $data['nik'] ?></td>
                                                <td><?php echo $data['nama'] ?></td>
                                                <td><?php echo $data['telepon'] ?></td>
                                                <td><?php echo $data['username'] ?></td>
                                                <td><?php echo $data['level'] ?></td>                                               <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $id; ?>">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?= $id; ?>">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- The Modal -->
                                            <div class="modal fade" id="edit<?= $id; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form method="post">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Data Karyawan Dengan Nama <?php echo $data['nama'] ?> - <?php echo $data['nik'] ?> - <?php echo $data['level'] ?></h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">

                                                                <label for="nik">NPK User</label>
                                                                <input type="text" id="nik" name="nik" class="form-control" value="<?php echo $data['nik'] ?>">

                                                                <label for="nama">Nama User</label>
                                                                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">

                                                                <label for="telepon">Telepon</label>
                                                                <input type="number" id="telepon" name="telepon" class="form-control" value="<?php echo $data['telepon'] ?>">

                                                                <label for="username">Username</label>
                                                                <input type="text" id="username" name="username" class="form-control" value="<?php echo $data['username'] ?>">

                                                                <label for="password">Password</label>
                                                                <input type="text" id="password" name="password" class="form-control" value="<?php echo $data['password'] ?>">

                                                                <label for="level">Level</label>
                                                                <div class="form-group">
                                                                 <div class="form-line">
                                                                    <select name="level" class="form-control show-tick">
                                                                        <option><?php echo $data['level'] ?></option>
                                                                        <option value="superadmin">Super Admin</option>
                                                                        <option value="admin">Admin</option>
                                                                        <option value="petugas">Petugas</option>
                                                                        <option value="esseiperbama">Esseo Perbama</option>
                                                                        <option value="propacific">Pro Pacific</option>
                                                                        <option value="lpkmitraindustri">LPK Mitra Industri</option>
                                                                        <option value="majujayaleksana">Maju Jaya Leksana</option>
                                                                        <option value="lpkmonas">LPK Monas</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <input type="hidden" name="id" value="<?= $id; ?>">


                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" name="update">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- The Modal -->
                                        <div class="modal fade" id="del<?= $id; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form method="post">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Data : <?php echo $data['nama'] ?> - <?php echo $data['nik'] ?> - <?php echo $data['level'] ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            Apakah Anda Yakin Ingin Menghapus Data User Ini Dari Daftar ?
                                                            <input type="hidden" name="id" value="<?= $id; ?>">
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-success" name="hapus">Hapus</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>



                                        <?php
                                    };
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2022</div>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
</body>

<!-- modal input -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Input Data Karyawan</h4>
            </div>
            <div class="modal-body">
                <form action="tambah_user_act.php" method="post">
                    <div class="form-group">
                        <label>NPK</label>
                        <input name="nik" type="text" class="form-control" placeholder="NIK" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama Karyawan">
                    </div>
                  
                    <div class="form-group">
                        <label>Telepon</label>
                        <input name="telepon" type="text" class="form-control" placeholder="Telepon">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <div class="form-group">
                         <div class="form-line">
                            <select name="level" class="form-control show-tick">
                                <option value="">-- Pilih Level --</option>
                                <option value="superadmin">Super Admin</option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                                <option value="esseiperbama">Esseo Perbama</option>
                                <option value="propacific">Pro Pacific</option>
                                <option value="lpkmitraindustri">LPK Mitra Industri</option>
                                <option value="majujayaleksana">Maju Jaya Leksana</option>
                                <option value="lpkmonas">LPK Monas</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
</div>
</div>

</html>