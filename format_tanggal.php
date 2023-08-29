<?php
include("C:\Users\lenovo\Desktop\xampp\htdocs\pemilwa\system\helpers\date_helper.php");
//ambil data tanggal yang diijinkan untuk dibuka
$range = date_range("2023-08-01", "2023-08-31");
//ambil tanggal dan jam sekarang
$tgl_sekarang = date('Y-m-j');
$jam_sekarang = date('H:i');
echo "range:$range tgl_sekarang:$tgl_sekarang jam_sekarang:$jam_sekarang";
//jika dibuka diluar tanggal yang ditentukan
// if (!(($tgl_sekarang >= "2023-08-01") and ($tgl_sekarang >= "2023-08-31"))) {
//     //if (!in_array($tgl_sekarang, $range)) {
//     redirect('vote/blok/warning-vote', 'refresh');
// } else {
//     //jika dibuka diluar jam yang ditentukan
//     if (!(($jam_sekarang >= "00:01") and ($jam_sekarang <= $this->Pemilwa_model->pengaturan('jam_tutup')))) {
//         redirect('vote/blok/warning-vote', 'refresh');
//     }
// }