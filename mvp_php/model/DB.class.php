<?php


/******************************************
Asisten Pemrogaman 13
 ******************************************/
class DB
{
    private $db_host = ''; // host
    private $db_user = ''; // user basis data
    private $db_password = ''; // password
    private $db_name = ''; // nama basis data
    private $db_link = ''; // objek koneksi mysqli
    private $result = null; // hasil dari eksekusi query

    function __construct($db_host = '', $db_user = '', $db_password = '', $db_name = '')
    {
        // konstruktor
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
        $this->db_name = $db_name;
    }

    function open()
    {
        // membuka koneksi
        $this->db_link = mysqli_connect($this->db_host, $this->db_user, $this->db_password, $this->db_name);
        if (!$this->db_link) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    function execute($query)
    {
        // mengeksekusi query
        if (!$this->db_link) {
            die("Database connection error");
        }
        $this->result = mysqli_query($this->db_link, $query);
        if (!$this->result) {
            die("Query execution error: " . mysqli_error($this->db_link));
        }
        return $this->result;
    }

    function getResult()
    {
        // mengambil hasil eksekusi query
        return mysqli_fetch_array($this->result);
    }

    function close()
    {
        // menutup koneksi
        mysqli_close($this->db_link);
    }
}
