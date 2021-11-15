<?php 

/**
 * 
 */
require 'Database.php';
class DangNhap extends Database
{
	protected $db;
	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}
	public function logup($username, $password)
	{
		$sql = "insert into users(username,password,level) values('$username', '$password', '0') ";
		$result = $this->db->conn->query($sql);
		//echo("hi");
		return $result;
	}
	public function login($username, $password)
	{
		$sql = "select username, password, level from users where username ='$username' and password = '$password'";
		$result = $this->db->conn->query($sql);
		//echo("hi");
		return $result;
	}
	public function logout(){
		session_start(); //to ensure you are using same session
		session_destroy(); //destroy the session
		header("Location: ../../view/client/index.php");
		 //to redirect back to "index.php" after logging out
		exit();
	}
}

 ?>
