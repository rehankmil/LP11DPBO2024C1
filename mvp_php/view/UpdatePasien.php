<?php


include("KontrakView.php");
include("presenter/ProsesPasien.php");

class UpdatePasien implements KontrakView
{
	private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->prosespasien = new ProsesPasien();
	}

	function tampil()
	{
		$this->prosespasien->prosesDataPasien();

		// Membaca template skin.html
		$this->tpl = new Template("templates/skinupdate.html");

        $this->tpl->replace("VAL_ID", $id);
        $this->tpl->replace("VAL_NIK", $nik);
        $this->tpl->replace("VAL_NAMA", $nama);
        $this->tpl->replace("VAL_TEMPAT", $tempat);
        $this->tpl->replace("VAL_TL", $tl);
        $this->tpl->replace("VAL_EMAIL", $email);
        $this->tpl->replace("VAL_TELP", $telp);

		// Menampilkan ke layar
		$this->tpl->write();
	}
}
