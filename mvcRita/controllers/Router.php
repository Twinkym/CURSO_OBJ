<?php 
session_start(); //debe ser la primera instrucción de un archivo

class Router {
	public $route;

	public function __construct($route) {
		$session_options = array (
			'use_only_cookies' => 1,
			'read_and_close' => true
		);

		if( !isset($_SESSION)) session_start($session_options);
		if( !isset($_SESSION['ok']))  $_SESSION['ok'] = false;
		
		if($_SESSION['ok']) {  
			//El usuario está autenticado

			$this->route = isset($_GET['r']) ? $_GET['r'] : 'home'; 			
			$controller = new ViewController();  // arma la página

			switch ($this->route) {
				case 'home':
					$controller->load_view('home');
					break;

				case 'status':
					if( !isset( $_POST['r'] ) )  $controller->load_view('status');
					else if( $_POST['r'] == 'status-add' )  $controller->load_view('status-add');
					else if( $_POST['r'] == 'status-edit' )  $controller->load_view('status-edit');
					else if( $_POST['r'] == 'status-delete' )  $controller->load_view('status-delete');
					break;

				case 'categorias':
					if( !isset( $_POST['r'] ) )  $controller->load_view('categorias');
					else if( $_POST['r'] == 'categorias-add' )  $controller->load_view('categorias-add');
					else if( $_POST['r'] == 'categorias-edit' )  $controller->load_view('categorias-edit');
					else if( $_POST['r'] == 'categorias-delete' )  $controller->load_view('categorias-delete');
					break;

				case 'salir':
					$user_session = new SessionController();
					$user_session->logout();
					break;
				
				default:
					$controller->load_view('error404');
					break;
			}
		} else {
			if( !isset($_POST['user']) && !isset($_POST['pass']) ) {
				//mostrar un formulario de autenticación
				$login_form = new ViewController();
				$login_form->load_view('login');
			}
			else {
				$user_session = new SessionController();
				$session = $user_session->login($_POST['user'], $_POST['pass']);

				if(empty($session) ) {
					//echo 'El usuario y el password son incorrectos';
					$login_form = new ViewController();
					$login_form->load_view('login');
					header('Location: ./?error = El usuario ' . $_POST['user'] . ' y el password proporcionado no coinciden');
				} else {
					// echo 'El usuario y el password son correctos';
					// var_dump($session);
					
					$_SESSION['ok'] = true;

					foreach ($session as $row) {
						$_SESSION['user'] = $row['user'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['name'] = $row['name'];
						$_SESSION['pass'] = $row['pass'];
						$_SESSION['role'] = $row['role'];
					}

					header('Location: ./');					
				}
			}
		}
	}


}