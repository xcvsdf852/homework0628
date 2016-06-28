<?php
 if(isset($_COOKIE["userName"])){
    $name = $_COOKIE["userName"];
    $status = '<a class="btn btn-warning" href="login.php?sigout=1">登出</a>';
 }else{
    $name = "Guest";
    $status = '<a class="btn btn-info" href="login.php">登入</a>';
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Lab - index</title>
</head>
<body>

<!--<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 首頁</font></td>
  </tr>
  <tr>
    <td align="center" valign="baseline"> <?php // echo $status ?> | <a href="secret.php">會員專用頁</a></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC">
      Hello <?php //echo $name ?>
    </td>
  </tr>
</table>-->
<div class = "row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6">
    <table class="table">
      <tr class="info">
        <td align="center" ><font >會員系統 - 首頁</font></td>
      </tr>
      <tr class ="warning">
        <td align="center" valign="baseline"> <?php echo $status ?> | <a class="btn btn-success" href="secret.php">會員專用頁</a></td>
      </tr>
      <tr class="info">
        <td align="center">
          Hello <?php echo $name ?>
        </td>
      </tr>
    </table>
  </div>
  <div class="col-md-3">
  </div>
</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>