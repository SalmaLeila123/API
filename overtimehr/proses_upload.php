

<?php 

            // menghubungkan dengan koneksi
$conn = mysqli_connect("localhost","root","","overtime");

            // menghubungkan dengan library excel reader
            include 'config.php';
            include "excel_reader.php";


            // upload file xls
$target = basename($_FILES['filedataovt']['name']) ;
move_uploaded_file($_FILES['filedataovt']['tmp_name'], $target);

            // beri permisi agar file xls dapat di baca
chmod($_FILES['filedataovt']['name'],0777);

            // mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filedataovt']['name'],false);
            // menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

            // jumlah default data yang berhasil di import

            $berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

                // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
    $npk     	         = $data->val($i, 1);
    $nama                = $data->val($i, 2);
    $dept  		         = $data->val($i, 3);
    $tgl		         = $data->val($i, 4);
    $jam_mulai           = $data->val($i, 5);
    $jam_selesai         = $data->val($i, 6);
    $m_istirahat_a       = $data->val($i, 7);
    $s_istirahat_a       = $data->val($i, 8);
    $m_istirahat_b       = $data->val($i, 9);
    $s_istirahat_b       = $data->val($i, 10);
    $jam_lembur          = $data->val($i, 11);
    $hari_lk             = $data->val($i, 12);
    $total_tuul           = $data->val($i, 13);


    if($npk != "" && $nama != "" && $dept != "" && $tgl != "" && $jam_mulai != "" && $jam_selesai != "" && $m_istirahat_a != "" && $s_istirahat_a != "" && $m_istirahat_b != "" && $s_istirahat_b != "" && $jam_lembur != "" && $hari_lk != ""&& $total_tuul!= "")
    {
                    // input data ke database (table barang)
        mysqli_query($mysqli,"INSERT into dataovt values('','$npk', '$nama', '$dept', '$tgl', '$jam_mulai', '$jam_selesai', '$m_istirahat_a', '$s_istirahat_a', '$m_istirahat_b', '$s_istirahat_b', '$jam_lembur', '$hari_lk', '$total_tuul')");
    }
}

            // hapus kembali file .xls yang di upload tadi
unlink($_FILES['filedataovt']['name']);

            // alihkan halaman ke index.php
header("location:halaman.php?berhasil=$berhasil");

?>

