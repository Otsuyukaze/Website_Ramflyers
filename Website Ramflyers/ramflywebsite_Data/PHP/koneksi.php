<?php

$host='localhost';
$username='root';
$password='';
$database='ramflywebsite';

$db = mysqli_connect($host, $username, $password, $database);

class koneksi{
var $host='localhost';
var $username='root';
var $password='';
var $database='ramflywebsite';

public function __construct(){
$this->konek=mysqli_connect($this->host, $this->username, $this->password, $this->database);
}
}
$bruh = new koneksi;
?>