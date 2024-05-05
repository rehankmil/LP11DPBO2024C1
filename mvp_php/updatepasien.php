<?php

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("presenter/ProsesPasien.php");

$dataPasien = []; // Mendefinisikan variabel $dataPasien

$tp = new UpdatePasien();

// Mengecek apakah ada parameter ID pasien yang dikirim melalui URL
if(isset($_GET['id'])) {
    // Mendapatkan ID pasien dari URL
    $id = $_GET['id'];
    
    // Menginisialisasi objek ProsesPasien
    $prosesPasien = new ProsesPasien();
    
    // Mengambil data pasien berdasarkan ID
    $dataPasien = $prosesPasien->getPasienById($id);
    
    // Memeriksa apakah form telah disubmit untuk update
    if(isset($_POST['submit'])) 
    {
        // Menangani proses pembaruan data pasien
        $data = array(
            'id' => $id,
            'nik' => $_POST['nik'],
            'nama' => $_POST['nama'],
            'tempat' => $_POST['tempat'],
            'tl' => $_POST['tl'],
            'gender' => $_POST['gender'],
            'email' => $_POST['email'],
            'telp' => $_POST['telp']
        );
        $result = $prosesPasien->updateDataPasien($data['id'], $data['nik'], $data['nama'], $data['tempat'], $data['tl'], $data['gender'], $data['email'], $data['telp']);
        if(!$result) 
        {
            // Redirect ke halaman tampil pasien jika update berhasil
            echo "Gagal memperbarui data pasien.";
        }
    }
} else {
    $data = $tp->tampil();
}