<?php
  if($_GET['sigout']){
    setcookie("userName", 'Guest',time()- 60*60*24);
    header("location: index.php"); 
    exit;
  }


  if(isset($_POST["btnOK"])){
    // echo '123';
    if($_POST["txtUserName"] != ""){
      setcookie("userName", $_POST["txtUserName"]);
      if(isset($_COOKIE["where"])){
        header("location: ".$_COOKIE["where"]);
      }else{
        header("location: index.php");  
      }
      exit;
    }else{
      $errorMSG ='
      
      <span class="glyphicon glyphicon-hand-right" aria-hidden="true" ></span> 請輸入帳號
      ';
      
    }
  }
?>
  <html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab - Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      .container {
         width:50%;
      }
    </style>
  </head>

  <body>
    <!--<form id="form1" name="form1" method="post" action="login.php">
  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 登入</font></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">帳號</td>
      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" /></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">密碼</td>
      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><input type="submit" name="btnOK" id="btnOK" value="登入" />
      <input type="reset" name="btnReset" id="btnReset" value="重設" />
      <input type="submit" name="btnHome" id="btnHome" value="回首頁" />
      </td>
    </tr>
  </table>
</form>-->

 <div class="container">
     <form class="form-signin" role="form" id="form1" name="form1" method="post" action="login.php">
         <h2 class="form-signin-heading">會員系統 - 登入</h2>
         <label for="inputEmail" class="sr-only">輸入帳號</label>
         <input type="text" name="txtUserName" id="txtUserName" class="form-control" placeholder="輸入帳號" autofocus=""> 
         <label for="inputPassword" class="sr-only">輸入密碼</label> 
             <input type="password" name="txtPassword" id="txtPassword"  class="form-control" placeholder="輸入密碼" >
         <div style = "margin :10px 0px 10px 0px ">
           <label class ="label label-danger"> 
             <?php echo  $errorMSG?>
             <!--<input type="checkbox" value="remember-me"> Remember me -->
           </label>
         </div>
         <button class="btn btn-lg btn-info btn-block" type="submit" name="btnOK" id="btnOK" >Sign in</button>
       </form>
   </div>
   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>
  </body>

  </html>