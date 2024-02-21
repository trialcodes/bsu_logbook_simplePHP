<html>
	
  <head>
    <title>LOGIN</title>
     <head class="logobackg">
<p class="backg1">
<img src="head.jpg" class="logo1" >

</p>
<style>
.logo1{
border-radius: 150px 150px 150px 150px;
color: royalblue;
box-shadow: 0 0 15px 0;
width: 180px;
height: 180px;
margin-top: 10px;
margin-left: 20px;

}

.backg1{
background-image: linear-gradient(royalblue, white);
margin-left: 0px;
margin-right: 20px;
width: 100%;
height: 220px;

} 

</style>
        <h3 style="border-radius: 10px 10px 0px 0px;"> BSU ATTENDANCE MONITORY </h3>
        <h5> LOGIN </h5>
      </head>
<br/>
  <br/>
<body>
  <style>

    h3 {
    height:50px;
    font-size: 25px;
    color: white;
    font-family: Broadway;
    font-weight: Bold;
    margin-left:220px;
    margin-top:-120px;
    }

    h5 {
    height:50px;
    font-size: 15px;
    color: white;
    font-family: Arial;
    font-weight: italic;
    margin-left:555px;
    margin-top:-50px;
    }

    table {
    width:295px;
    border:0px;
    color:black;
    box-shadow:0 0 15px 0;
    vertical-align:top;
    border-radius: 10x 10px 10px 10px;
    align:center;
    }


    head {
    background-color: #B720EE;
    text-align: center;
    }

    button {
    border: 2px;
    color:black;
    height: 40px;
    width: 280px;
    margin-top:3px;
    margin-left:5px;
    margin-bottom:3px;
    background-color:snowwhite;
    border-radius: 5px 5px 5px 5px;
    }
	
	button:hover {
		 background-color:royalblue;
		
	}


    input {
    border: 1px 1px 1px 1px;
	border-color:royalblue;
    color:black;
    height: 40px;
    width: 280px;
    margin-left:5px;
    margin-top:3px;
    margin-bottom:3px;
    background-color:snowwhite;
    border-radius: 5px 5px 5px 5px;
  

    }
	
	input:hover {
		 background-color:royalblue;
		

    a {
    border: 1px 1px 1px 1px;
	border-color:royalblue;
    color: black;
    height: 40px;
    width: 280px;
    margin-top:3px;
    margin-left:100px;
    margin-bottom:3px;
    background-color:snowwhite;
    border-radius: 5px 5px 5px 5px;
    text-decoration:none;
	align:center;
	text-align:center;
    }

  </style>


	
	<?php 	
      
session_start();

// Create database connection using config file
include_once("config.php");

// If form submitted, collect email and password from form
if (isset($_POST['Submit'])) {
    $username   = $_POST['username'];
    $password = $_POST['password'];

    // Check if a user exists with given username & password
    $result = mysqli_query($mysqli, "select 'username', 'password' from `db_bsumonitory.tb_accounts` where username='$username' and password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

        $_SESSION["username"] = $username;
        header("location: records.php");
          echo "<p style='color: white; border: 2px 2px 2px 2px; border-radius:10px 10px 10px 10px; background-color: red; font-size: 17px; height: 60px; text-align:center; width:100%;'> YOU ARE NOW LOGGED ON!</p>";
    } else {
        echo "<p style='color: white; border: 2px 2px 2px 2px; border-radius:10px 10px 10px 10px; background-color: red; font-size: 17px; height: 60px; text-align:center; width:100%;'> USERNAME AND PASSWORD NOT MATCH!</p>";
    }
}
?>
  <form action="index.php" method="post" name="form1">
    <table border="0" align="center">
      <tr>

        <td>
          <img src="bgaccm.jpg" width="100" height="100" style="border-radius:50px 50px 50px 50px; align:center; margin-left:45px;">
            <img src="bgaccf.jpg" width="100" height="100" style="border-radius:50px 50px 50px 50px; align:center;">
              </br>
              <input type="text" name="username" placeholder="Username" required="">
        </td>
      </tr>
      <tr>
        <td>
          <input type="password" name="password" placeholder="Password" required="">
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="Submit" value="LOGIN"> <br> <br>
		 <button> <a href="../bsumonitory.com/register/add.php"> REGISTER NOW </a> </button>
        </td>
      </tr>
    </table>
    </form>
</body>
    <br/>
    <footer>
    <br/>
   <p class="backg2">
<img src="head.jpg" class="logo2" >

</p>

<style>
.logo2{
border-radius: 150px 150px 150px 150px;
color: royalblue;
box-shadow: 0 0 15px 0;
width: 140px;
height: 140px;
margin-top: 20px;
margin-left: 20px;

}

.backg2{
background-image: linear-gradient(white,royalblue);
margin-left: 0px;
margin-right: 10px;
width: 100%;
height: 160px;

}

.foot1 { 
margin-top:-90px;
margin-left: 175px;
font-size: 13px;
font-family:rockwell;

}


</style>
         <h5 class="foot1">
	     BSU ATTENDANCE MONITORY <br>
          Copyright 2022  | All Right Reserved. <br>
          Powered by:  Michael Sarmiento | Yuji Mendoza  | Shaira Nicole Fruto | Kathlene Trabajales | Mariell Erika Go | Lionel Roque
        </h5>	
      </footer>



</html>