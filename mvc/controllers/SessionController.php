<?php
class SessionController {
	private $session;

	public function __construct() {
		$this->session = new UsersModel();
	}

	public function login($user, $pass) {
		$data = $this->session->validate_user($user, $pass);
		print_r($data);
		return $data;
	}

	public function logout() {
		session_start();
		session_destroy();
		header('Location: ./');
	}


}