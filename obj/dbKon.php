<?php
class dbKon{
//Database Connection
	private		$conn;
	private		$data;
	private		$db;
	private 	$host 		= "localhost";
	private 	$username 	= "root";
	private 	$password 	= "";
	private 	$dbname 	= "og_WO";
	
	public function __construct(){
		$this->db = new mysqli($this->host, $this->username, $this->password, $this->dbname);

		if ($this->db->connect_error) {
    	 die("Connection failed: " . $this->db->connect_error);
    		}
		}
	}

	public function handleData( $lion ){
		//$ins = "INSERT INTO Member(fname, lname, email, address, city, state, zip, occupation, donateDate, socialMedia ) VALUES('".$userFN."', '".$userLN."','".$userEM."','".$userCity."','".$userAdd."','".$userCity."','".$userZip."','".$userAge."','".$userJob."','".$donateDate."','".$userSM."')";
		
		$this->db->query( $lion );

		return true;
	}

	}

?>