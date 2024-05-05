<?php


class Pasien extends DB
{
	var $id = '';
	var $nik = '';
	var $nama = '';
	var $tempat = '';
	var $tl = '';
	var $gender = '';
	var $email = '';
	var $telp = '';

	function __construct($id = '', $nik = '', $nama = '', $tempat = '', $tl = '', $gender = '', $email = '', $telp = '')
	{
		$this->id = $id;
		$this->nik = $nik;
		$this->nama = $nama;
		$this->tempat = $tempat;
		$this->tl = $tl;
		$this->gender = $gender;
		$this->email = $email;
		$this->telp = $telp;
	}

	function setId($id)
	{
		$this->id = $id;
	}
	function setNik($nik)
	{
		$this->nik = $nik;
	}
	function setNama($nama)
	{
		$this->nama = $nama;
	}
	function setTempat($tempat)
	{
		$this->tempat = $tempat;
	}
	function setTl($tl)
	{
		$this->tl = $tl;
	}
	function setGender($gender)
	{
		$this->gender = $gender;
	}
	function setEmail($email)
	{
		$this->email = $email;
	}
	function setTelp($telp)
	{
		$this->telp = $telp;
	}

	function getId()
	{
		return $this->id;
	}
	function getNik()
	{
		return $this->nik;
	}
	function getNama()
	{
		return $this->nama;
	}
	function getTempat()
	{
		return $this->tempat;
	}
	function getTl()
	{
		return $this->tl;
	}
	function getGender()
	{
		return $this->gender;
	}
	function getEmail()
	{
		return $this->email;
	}
	function getTelp()
	{
		return $this->telp;
	}

	// function save()
	// {
	// 	$query = "INSERT INTO pasien (nik, nama, tempat, tl, gender, email, telp) VALUES ('$this->nik', '$this->nama', '$this->tempat', '$this->tl', '$this->gender', '$this->email', '$this->telp')";
	// 	return $this->execute($query);
	// }

	// function update()
	// {
	// 	$query = "UPDATE pasien SET nik='$this->nik', nama='$this->nama', tempat='$this->tempat', tl='$this->tl', gender='$this->gender', email='$this->email', telp='$this->telp' WHERE id='$this->id'";
	// 	return $this->execute($query);
	// }

	// function delete()
	// {
	// 	$query = "DELETE FROM pasien WHERE id='$this->id'";
	// 	return $this->execute($query);
	// }
}
