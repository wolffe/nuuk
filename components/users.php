<?php
function user_register($username, $password, $email) {
  $db = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME . ';charset=utf8', DBUSER, DBPASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $password = hash_hmac('sha512', $password, '#+pT%B[M1X3R),Z(Y+q_tZwX~l@DXum2PdHS8hvmaVENrmI_?cvE#j8]n^.u]Ni+');

    $stmt = $db->prepare("INSERT INTO user (username, password, email, registration_date) VALUES ('$username', '$password', '$email', NOW())");
    $stmt->execute();
}

function user_login($username, $password) {
	$db = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME . ';charset=utf8', DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $password = hash_hmac('sha512', $password, '#+pT%B[M1X3R),Z(Y+q_tZwX~l@DXum2PdHS8hvmaVENrmI_?cvE#j8]n^.u]Ni+');

    $stmt = $db->prepare("SELECT * FROM user WHERE username='$username' AND password='$password'");
    $stmt->execute();
    $user = $stmt->fetch();

    if($password == $user['password']) {
		// Store the data in the session
		$_SESSION['username'] = $username;
		$_SESSION['rcrypt'] = hash_hmac('sha512', $_SESSION['username'], '#+pT%B[M1X3R),Z(Y+q_tZwX~l@DXum2PdHS8hvmaVENrmI_?cvE#j8]n^.u]Ni+');

		return 'Correct';
	}
	else {
		return false;
	}
}

function user_logout() {
	session_unset();
	session_destroy();
}

function is_authed() {
	// Check if the encrypted username is the same as the unencrypted one, if it is, it hasn't been changed
	if(isset($_SESSION['username']) && (hash_hmac('sha512', $_SESSION['username'], '#+pT%B[M1X3R),Z(Y+q_tZwX~l@DXum2PdHS8hvmaVENrmI_?cvE#j8]n^.u]Ni+') == $_SESSION['rcrypt'])) {
		return true;
	}
	else {
		return false;
	}
}
?>