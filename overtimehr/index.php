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