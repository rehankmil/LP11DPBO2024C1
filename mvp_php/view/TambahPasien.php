<?php


include("KontrakView.php");
include("presenter/ProsesPasien.php");

class TambahPasien implements KontrakView
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
		$this->tpl = new Template("templates/skintambah.html");

		// Menampilkan ke layar
		$this->tpl->write();
	}
}
