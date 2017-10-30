<?php

/**
 * @author GallerySoft.info
 * @copyright 2017
 */

require_once 'config.php';
class DB_Connection{
    private $connect;
    function __construct()
    {
		$conn = mysqli_connect(hostname, username, password, db_name) or die ('Không th? k?t n?i t?i database');
//	or die("can't connect database");
        mysqli_set_charset($conn,"utf8");
        $this->connect = $conn;

    }
    public function get_connection()
    {
        return $this->connect;  
    }
}

?>