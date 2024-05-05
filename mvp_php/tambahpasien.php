<?php

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TambahPasien.php");

$tp = new TambahPasien();
if(isset($_POST['submit']))
{
    // Tangani proses penambahan data pasien
    $prosesPasien = new ProsesPasien();
    $data = array(
        'nik' => $_POST['nik'],
        'nama' => $_POST['nama'],
        'tempat' => $_POST['tempat'],
        'tl' => $_POST['tl'],
        'gender' => $_POST['gender'],
        'email' => $_POST['email'],
        'telp' => $_POST['telp']
    );
    $result = $prosesPasien->tambahPasien($data);
}
else
{
    $data = $tp->tampil();
}