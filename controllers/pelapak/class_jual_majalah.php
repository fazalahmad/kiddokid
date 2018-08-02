<?php
ob_start();
/**
 *
 */
class Controllers_Majalah
{

  private $dsn = 'mysql:host=localhost; dbname=kiddokid_db';
  private $username = 'root';
  private $passwd = '';
  private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  private $table = 'majalah';
  private $kolom = array('Nama_Majalah','Kategori','Harga','Deskripsi_Majalah', 'Foto_Majalah', 'Edisi_Majalah');
  private $conn;

  public function __construct()
  {
    $this->conn = new PDO($this->dsn, $this->username, $this->passwd, $this->options);
  }

  public function tambah_majalah($data_barang)
  {
    var_dump($data_barang); die();
    try {
      $sql = 'INSERT INTO '.$this->table.' (Nama_Majalah,Kategori,Harga,Deskripsi_Majalah, Foto_Majalah,Edisi_Majalah) VALUES (? , ? , ? , ?)';

      # bind
      $query = $this->conn->prepare($sql);
      $query->bindParam(1, $title);
      $query->bindParam(2, $author);
      $query->bindParam(3, $year);
      $query->bindParam(4, $distributor);
      $nama_barang = $data[0];
      $kategori = $data[1];
      $harga = $data[2];
      $deskripsi = $data[3];
      $file_foto = $data[4];
      $edisi = $data[5];
      # execute
      $query->execute();

      header('location: login.php');
    } catch (PDOException $ex) {
      print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> ' .$ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
    }
  }



}


 ?>
