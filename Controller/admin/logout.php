<?php

class Logout {

	
	public function __construct()
	{
		unset($_SESSION['user']); // xóa session user đã tạo khi đăng nhập
		Header('Location: ./,',true,301); // chuyển hướng về trang chủ
		exit();
	}
}
$logout = new Logout();