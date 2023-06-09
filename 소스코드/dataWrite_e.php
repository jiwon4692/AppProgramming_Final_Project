<html>
<?php

	$host = 'localhost';
	$user = 'jiwon';
	$pw = '4692';
	$dbName = 'test';
	$mysqli = new mysqli($host, $user, $pw, $dbName);

	$data = $_POST['note']; //html의 name태그가 title인 값 가져오기
	$data = addslashes($data); //특수문자 처리

	$sql = "insert into note (
			emotion,
			data)";
	
	$sql = $sql. "values (
			'happy',
			'$data')";

	if($mysqli->query($sql)){ 
	  echo '<script>alert("일기가 저장되었어요.")</script>'; 
	}else{ 
	  echo '<script>alert("fail to insert sql")</script>';
	}

	mysqli_close($mysqli);
  
?>

<script>
	location.href = "main_calendar_happy.html"; //db 인서트 후 돌아갈 페이지 지정
</script>

</html>