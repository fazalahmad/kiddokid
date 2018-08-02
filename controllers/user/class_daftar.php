<?php
ob_start();
class daftar
{
  private $dsn = 'mysql:host=localhost; dbname=kiddokid_db';
  private $username = 'root';
  private $passwd = '';
  private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  private $table = 'user';
  private $kolom = array('NamaLengkap','Email','Password','Level');
  private $conn;

  public function __construct()
  {
    $this->conn = new PDO($this->dsn, $this->username, $this->passwd, $this->options);
  }

  public function register($data){
      try {
        $sql = 'INSERT INTO '.$this->table.' (NamaLengkap,Email,Password,Level) VALUES (? , ? , ? , ?)';

        # bind
        $query = $this->conn->prepare($sql);
        $query->bindParam(1, $title);
        $query->bindParam(2, $author);
        $query->bindParam(3, $year);
        $query->bindParam(4, $distributor);
        $title = $data[0];
        $author = $data[1];
        $year = $data[2];
        $distributor = $data[3];
        # execute
        $query->execute();

        header('location: login.php');
      } catch (PDOException $ex) {
        print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> ' .$ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
      }

  }

}


 ?>
