<link rel="stylesheet" href="./app/Views/admin/adminUtils/style.css">
<div class="form-container">
    <form id="login-form" method="post" action="admin/login">
        <input type="text" id="username" name="username" placeholder="Username" class="form-username"><br/>
        <input type="password" id="password" name="password" placeholder="Password" class="form-password"><br/>
        <button id="login" name="login" class="form-login">LOGIN</button>
    </form>
</div>
<?php
	
	if ( isset( $_POST['login'] ) ) {
		$database = new Database();
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT USERNAME FROM ADMIN WHERE USERNAME LIKE '$username' AND PASSWORD LIKE '$password';";
		
		$result = $database->query( $sql );
		
		if ( isset( $result[0]['USERNAME'] ) ) {
			$_SESSION['login'] = true;
			header( 'Location: http://localhost:8001/admin/menu' );
		} else {
			header( 'Location: http://localhost:8001/admin' );
		}
	}

?>
