<?php

/******************************************
Asisten Pemrogaman 13
 ******************************************/

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");


$tp = new TampilPasien();
if (!empty($_GET['id_hapus']))
{
    $id = $_GET['id_hapus'];

    // Buat objek ProsesPasien
    $prosesPasien = new ProsesPasien();
    
    // Panggil fungsi tambahDataPasien() untuk menambah data pasien
    $prosesPasien->hapusPasien($id);
}
// else if (!empty($_GET['id_edit']))
// {
//     //memanggil add
//     $id = $_GET['id_edit'];

//     // Buat objek ProsesPasien
//     $prosesPasien = new ProsesPasien();
    
//     // Panggil fungsi tambahDataPasien() untuk menambah data pasien
//     $prosesPasien->updatePasien($data);
// }
else
{
    $data = $tp->tampil();
}