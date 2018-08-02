<?php
ob_start();

/**
 *
 */
class Controllers_Komik
{

    private $dsn = 'mysql:host=localhost; dbname=kiddokid_db';
    private $username = 'root';
    private $passwd = '';
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    private $table_majalah = 'majalah';
    private $table_user = 'user';
    private $table_komik = 'komik';
    private $kolom = array('Nama_Majalah','Kategori','Harga','Deskripsi_Majalah', 'Foto_Majalah', 'Edisi_Majalah');
    private $conn;

    public function __construct()
    {
      $this->conn = new PDO($this->dsn, $this->username, $this->passwd, $this->options);
    }

    public function tambah_komik($data_barang)
    {

      try {
        $sql = 'INSERT INTO '.$this->table_komik . '
          (Nama_Komik,Kategori,Harga,Deskripsi_Komik, Foto_Komik,Volume_Komik,Email)
          VALUES (? , ? , ? , ? , ? , ? , ?)';

        # bind
        $query = $this->conn->prepare($sql);
        $query->bindParam(1, $nama_barang);
        $query->bindParam(2, $kategori);
        $query->bindParam(3, $harga);
        $query->bindParam(4, $deskripsi);
        $query->bindParam(5, $file_foto);
        $query->bindParam(6, $Volume);
        $query->bindParam(7, $_SESSION['Email']);

        $nama_barang = $data_barang[0];
        $kategori = $data_barang[1];
        $harga = $data_barang[2];
        $deskripsi = $data_barang[3];
        $file_foto = $data_barang[4];
        $Volume = $data_barang[5];

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

    public function tampil_komik()
    {
      // $sql = 'SELECT * FROM '.$this->table.' join "'.$table_user.'" on user.Email=majalah.Email';
      $sql = 'SELECT * FROM user join komik on user.Email= komik.Email ORDER BY id_komik DESC';
        try{
            $query = $this->conn->query($sql);
            return $query->fetchAll();
        } catch (PDOException $ex) {
            print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '
            .$ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
        }
    }

    public function tampil_pelapak()
    {
      // $sql = 'SELECT * FROM '.$this->table.' join "'.$table_user.'" on user.Email=majalah.Email';
      $email = $_SESSION['Email'];
      $sql = "SELECT * FROM user join komik on user.Email= komik.Email  and user.Email='$email' ORDER BY id_komik DESC ";
      // var_dump($sql); die();
        try{
            $query = $this->conn->query($sql);
            return $query->fetchAll();
        } catch (PDOException $ex) {
            print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '
            .$ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
        }
    }


    public function delete_majalah($id)
    {

      $sql = 'DELETE FROM '.$this->table_komik.' WHERE id_komik = "'.$id.'" ';

        try{
        $query = $this->conn->exec($sql);
        return $query.' data dihapus.';
        } catch (PDOException $ex) {
        print "<b>Kesalahan :</b> ".$ex->getMessage().' <b>di</b> '
        .$ex->getFile().' <b>pada baris ke-</b>'.$ex->getLine().'<br>';
        }
    }


}


 ?>
