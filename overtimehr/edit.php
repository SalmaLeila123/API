<?php
// include database connection file
include_once("config.php");
 
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
    header("Location: index.php");
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
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
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
                        <label>Hari Libur/Kerja</label>
                        <div class="form-group">
                         <div class="form-line">
                            <select name="hari_lk" class="form-control show-tick">
                               
                                <option> <?php echo $hari_lk;?></option>
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
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>