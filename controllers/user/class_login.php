<?php
/**
 *
 */
class Controllers_Login
{

  private $dsn = 'mysql:host=localhost; dbname=kiddokid_db';
  private $username = 'root';
  private $passwd = '';
  private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  private $table = 'user';
  private $kolom = array('Email','Password');
  private $conn;

  public function __construct()
  {
    $this->conn = new PDO($this->dsn, $this->username, $this->passwd, $this->options);
  }

  public function post_login($data){

      $email = $data[0];
      $pass = $data[1];

      // $sql = 'SELECT * FROM user where Email = "'.$data[0].'" AND Password = "'.$data[1].'"';
      $sql = 'SELECT * FROM '.$this->table. ' where Email= "'.$email.'" AND Password = "'.$pass.'" ' ;

      try {
        $query = $this->conn->query($sql);
        $tampil = $query->fetch();
        // $tampil = $query->fetchAll();

        if ($tampil == true) {
          session_start();
          // var_dump($tampil); die();
          $_SESSION['NamaLengkap'] = $tampil['NamaLengkap'];
          $_SESSION['Email'] = $tampil['Email'];
          $_SESSION['Password'] = $tampil['Password'];
          $_SESSION['Level'] = $tampil['Level'];

          header('location: ../../index.php');
        }
      } catch (PDOException $ex) {
        print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '.$ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
      }


  }

}


 ?>
