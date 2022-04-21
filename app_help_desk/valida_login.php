<?php 
	
	session_start();

	$usuario_autenticado = false;

	$usuarios_app = array (
		array('email' => 'alexpcadmin@php.com', 'senha' => '123456'),
);

	foreach($usuarios_app as $user) {
		
		if ($user['email'] == $_POST['email'] && $user['senha'] ==  $_POST['senha']) {
			$usuario_autenticado = true;
		}

		if ($usuario_autenticado) {
			echo 'Usuário autenticado';
			$_SESSION['autenticado'] ='Sim';
			header('Location: home.php?');
		} else {
			$_SESSION['autenticado'] = 'Não';
			header('Location: index.php? login=erro');
		}

	}


	/*echo '<pre>';
		print_r($usuarios_app);
		echo '<pre/>';*/

	/*print_r($_POST);

	echo '<br/>';
	echo $_POST['email'];
	echo '<br/>';
	echo $_POST['senha'];*/

 ?>