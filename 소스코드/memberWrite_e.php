<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'jiwon';
		$pw = '4692';
		$dbName = 'test';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

	    $member_name = $_POST['name'];
		$member_email = $_POST['email'];
	    $member_pw1 = $_POST['pw1'];
		$member_nickname = $_POST['nickname'];

		$sql = "insert into de_member (
				member_name,
				member_email,
				member_pw1,
				member_nickname
		)";
		
		$sql = $sql. "values (
				'$member_name',
				'$member_email',
				'$member_pw1',
				'$member_nickname'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("회원가입이 완료되었습니다. 로그인 화면으로 이동합니다.")</script>'; 
		}else{ 
		  echo '<script>alert("fail to insert sql")</script>';
		}

		mysqli_close($mysqli);
	  
		
	?>

<script>
	location.href = "sign_e.html";
</script>

</html>