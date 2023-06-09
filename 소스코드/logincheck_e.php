<?php

$host = 'localhost';
$user = 'jiwon';
$pw = '4692';
$dbName = 'test';
$con = new mysqli($host, $user, $pw, $dbName);

$id = $_POST['id']; // 아이디
$pw = $_POST['pw']; // 패스워드

$query = "select * from de_member where member_email='$id' and member_pw1='$pw'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($id==$row['member_email'] && $pw==$row['member_pw1']){ // id와 pw가 맞다면 login

	echo "<script> alert('로그인 성공!'); </script>";
	echo "<script> location.href = 'main_calendar.html'; </script>";

}else{ // id 또는 pw가 다르다면 admin_login 폼으로

   echo "<script> alert('아이디 또는 비밀번호를 확인해주세요.'); </script>";
   echo "<script> location.href = 'sign_e.html'; </script>";

}

?>