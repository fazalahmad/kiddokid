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
    session_start();
    try {

      $sql = 'INSERT INTO '.$this->table.'
        (Nama_Majalah,Kategori,Harga,Deskripsi_Majalah, Foto_Majalah,Edisi_Majalah,Email)
        VALUES (? , ? , ? , ? , ? , ? , ?)';

      # bind
      $query = $this->conn->prepare($sql);
      $query->bindParam(1, $nama_barang);
      $query->bindParam(2, $kategori);
      $query->bindParam(3, $harga);
      $query->bindParam(4, $deskripsi);
      $query->bindParam(5, $file_foto);
      $query->bindParam(6, $edisi);
      $query->bindParam(7, $_SESSION['Email']);

      $nama_barang = $data_barang[0];
      $kategori = $data_barang[1];
      $harga = $data_barang[2];
      $deskripsi = $data_barang[3];
      $file_foto = $data_barang[4];
      $edisi = $data_barang[5];

      # execute
      $query->execute();

      $location = "../../public/gambar_barang/".$file_foto; // Target path where file
      $sourcePath = $_FILES['foto_barang']['tmp_name']; // Storing source path of the file in a variable
      move_uploaded_file($sourcePath,$location);

      header('location: ../../index.php');
    } catch (PDOException $ex) {
      print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> ' .$ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
    }

  }

  public function tampil()
  {
    $sql = 'SELECT * FROM '.$this->table;
      try{
          $query = $this->conn->query($sql);
          return $query->fetchAll();
      } catch (PDOException $ex) {
          print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '
          .$ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
      }
  }



}


 ?>
