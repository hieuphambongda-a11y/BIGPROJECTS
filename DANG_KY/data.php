<?php
class Database {
    public $ketnoi;

    public function __construct() {
        $host="localhost";
        $dbuser="root";
        $dbpass="";
        $dbname="dangky_dangnhap";
        $port=3308;

        $this->ketnoi = mysqli_connect($host,$dbuser,$dbpass,$dbname,$port);

        if(!$this->ketnoi){
            die("Không thể kết nối với database");
        }
    }
}
?>
