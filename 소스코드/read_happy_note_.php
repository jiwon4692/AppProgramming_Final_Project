

<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.0/examples/sign-in/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./smile.png">

    <title>하루감정</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="./sign_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./sign_files/signin.css" rel="stylesheet">
    <style>
      .btn btn-lg btn-primary btn-block{
        background-color: #FFBF00;
        color: black;
        border-color: black;
      }
      @font-face {
      font-family: 'bazzi';
      src: url('./Bazzi.ttf') format('truetype');
      }
      
    ::placeholder{
      font-family: 'bazzi';
      color: grey;
    }
    .note {
        background-color: white;
        width: 300px;
        height: 400px;
        border-radius: 10px;
        border-
        border-color: #FFBF00;
        padding: 15px;
        font-family: "bazzi";
      }
  </style>
    <script>
        function Input() 
        {
            document.frmInput.submit();
        }
    </script>

  </head>

  <body class="text-center" style="background-color:#FFFAE6;">
    <form class="form-signin" name="frmInput" action="dataWrite_e.php" method="post" enctype="multipart/form-data">
      <img class="mb-4" src="./happy.png" alt="" width="70" height="70" style="">
      <h3 class="h4 mb-3 font-weight-normal" style='font-family: "bazzi"'>2023년 6월 7일</h3>
      <h3 class="h5 mb-3 font-weight-normal" style='font-family: "bazzi"; color: grey'>화요일</h3>
        <div class="note" style="font-family: 'bazzi'"><?php

$host = 'localhost';
$user = 'jiwon';
$pw = '4692';
$dbName = 'test';
$mysqli = new mysqli($host, $user, $pw, $dbName);

$sql = "SELECT * FROM note"; 
$result = mysqli_query($mysqli, $sql);

while($row = mysqli_fetch_assoc($result)) {

    $emotion = $row['emotion'];
    $data = $row['data'];
    

    
}

$myObj = new stdClass();
$myObj->note = $data;


$myJSON = json_encode($myObj, JSON_UNESCAPED_UNICODE);

echo $myJSON;

?></div>

      <button class="btn btn-lg btn-primary btn-block" type="button" onclick="location.href='main_calendar_happy.html'" 
      style = 'background-color: #FFBF00; border-color: goldenrod;  font-family: "bazzi"; margin-top: 5px'>돌아가기</button>

      <p class="mt-5 mb-3 text-muted">© 20190987 서지원</p>
    </form>
  

</body></html>