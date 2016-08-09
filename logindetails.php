<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type="text/css">
	
	*{padding:0px;margin:0px;}
	body{background-image: url(images/carousel1.jpg); 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;}
#sitename{color:orange;font-size: 45px;text-decoration: underline overline;position:absolute;top:30px;left:380px;}
#content{color:orange;position:absolute;top:180px;left:240px;font-size:25px;width:600px;}
  #formbox{    width: 350px;
        height: 400px;
        position: absolute;
        left:980px;top:100px;
        text-align: center;
        color:orange;
    }
    input{width:300px;padding:8px 8px;margin:8px;box-sizing: border-box;color:blue;}
input[type=text],input[type=password],input[type=submit]{border:2px solid orange;border-radius: 8px;}
input[type=submit]{background-color: #EF4837;font-size: 18px;color:orange;}
     .result{font-size: 25px;position: absolute;top:560px;right:15px;}
 .loginbtn{width:300px;padding:8px 8px;margin:8px;box-sizing: border-box;background-color:orange;font-size: 20px;color:#EF4837 ;font-weight:bold; border-radius: 8px;}  
 #content .loginbtn:hover{background-color:#2469B3 ;color:white;box-shadow: 5px 5px 4px white;}

 .modal-header, h4, .close {
      background-color: #EF4837;
      border-radius: 40px;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-content{border-radius: 60px;background:linear-gradient(to bottom,orange,white);}
.btn{background-color:#EF4837 ;}
.btn:hover{background-color:#2469B3 ;}
.loginresult{display:block;position:absolute;top:250px;right:400px;}
.alert{position: absolute;top:340px;right:400px;}
</style>

</head>
<body>
<?php

$user_name="ABHI";
$host_name="localhost";
$admin_password="123";
mysql_connect($host_name,$user_name,$admin_password);
mysql_select_db("seconddb");


if(isset($_POST['logname'])&&isset($_POST['logpass']))
{$logname=$_POST['logname'];
$logpass=$_POST['logpass'];

	if(!empty($_POST['logname'])&&!empty($_POST['logpass']))
	{
	$queryl="SELECT * FROM `logintb` WHERE `name` = '$logname' AND `password` = '$logpass' ";
	$queryl_run=mysql_query($queryl);
	if(mysql_num_rows($queryl_run)==1)
	{ session_start();
		$_SESSION['check']='login';
		$_SESSION['welcomeuser']=$logname;
		header("location:mainpage.php");

	}
	else
	{echo '<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-

label="close">&times;</a>
    <strong>LOGIN ERROR!</strong><br>enter a valid  username and password or you can create a new account
  </div>';}	
	}
	else
		{echo '<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-

label="close">&times;</a>
    <strong>LOGIN ERROR!</strong><br>you can not leave anyfield empty youy must supply username and password
  </div>';}
}



if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['pass'])&&isset($_POST['rpass']))
	{
$name=$_POST['name'];
$mail=$_POST['email'];
$password=$_POST['pass'];
$rpassword=$_POST['rpass'];
if($password!=$rpassword)
	echo "<em style=\"color:red\" class='result' >*password do not match</em>";
else
{
   
 $query="SELECT * FROM `logintb` WHERE `name` = '$name' ";
 $query_run=mysql_query($query);
 if(mysql_num_rows($query_run)==1)
 	{echo "<em style='color:red' class='result' >*user name already exist</em>";}
 else
 	{echo "<em style='color:red' class='result' >*Your form has been submitted now LOGIN</em>";

$queryi="INSERT INTO `logintb` (`id`, `name`, `email`, `password`) VALUES (NULL, '".$name."', '".$mail."', '".$password."')";
$queryi_run=mysql_query($queryi);




}


}
}






?>




<p id="sitename">ONE STOP TUT<p>
<div id="content">
	
	<p>We provide  free video tutorial on every possible topics that young developers needs .<br>
	All tutorial are from various sources which will help developers to learn things easily
	</p>
    <ul>
		<li>JAVA</li>
	    <li>ANDROID</li>
	    <li>HTML</li>
	    <li>PHP</li>
    </ul>
 <button type="button" class="loginbtn" id="mybtn" data-toggle="modal" data-target="#myModal" >CLICK HERE TO LOGIN</button>

</div>
<!-- Modal -->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST" action="">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email" name="logname">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open" ></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password" name="logpass">
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
      </div>
      
    </div>
  </div> 













<!-- Modal -->



<div id="formbox">
 <h2>SIGN IN</h2>
 <hr>
 <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
 NAME:<br><input type="text" name="name" value=""  data-toggle="popover"  data-trigger="hover" data-placement="left" data-content="Enter a username"></input><br>
 Email:<br><input type="text" name="email" value=""  data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Enter a valid email address"></input><br>
 Password:<br><input type="password" name="pass" value="" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="password of max length 10" ></input><br>
 Retype Password:<br><input type="password" name="rpass" value=""  data-toggle="popover" data-trigger="hover" data-placement="left" data-content="retype the same password you created"></input><br>
 <input type="submit" name="submit" value="submit form"  data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Click here to submit form"></input><br>
 </form>

</div>
<script >
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
	
	
</script>



</body>
</html>