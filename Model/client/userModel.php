<?php

class userModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function signup($username, $password, $fullName, $email, $sdt)
	{	
		$sql = "INSERT INTO user (user_name, Password, hoten, Email, Sdt, id_role )
							VALUES ('$username', '$password', '$fullName','$email','$sdt',1)";
		$this->db->conn->query($sql);
	}

	public function login($username, $password)
	{
		$sql = "SELECT * FROM user WHERE user_name = '$username' AND Password = '$password'";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}

	public function checkExists($username) {
		$sql = "SELECT * FROM user WHERE user_name = '$username'";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}
}

?>