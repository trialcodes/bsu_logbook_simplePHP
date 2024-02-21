
<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$lastname=$_POST['lastname'];
	$firstname=$_POST['firstname'];
	$address=$_POST['address'];
	$position=$_POST['position'];
	$email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $username=$_POST['username'];
    $password=$_POST['password'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE `db_bsumonitory.tb_accounts` SET lastname='$lastname',firstname='$firstname',address='$address',position='$position',mobile='$mobile',email='$email',username='$username' ,password='$password' WHERE id=$id");
	
  if ($result) {
                    echo " <p style='color: white; border: 2px 2px 2px 2px; border-radius:10px 10px 10px 10px; background-color: red; font-size: 17px; height: 60px; text-align:center; width:100%;'> An ACCOUNT UPDATED SUCCESSFULLY. </p>";
                } else {
                    echo "Updating error. Please try again." . mysqli_error($mysqli);
                }

	// Redirect to homepage to display updated user in list
header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM `db_bsumonitory.tb_accounts` WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$lastname = $user_data['lastname'];
	$firstname = $user_data['firstname'];
	$address = $user_data['address'];
	$position = $user_data['position'];
    $mobile = $user_data['mobile'];
	$email = $user_data['email'];
    $username = $user_data['username'];
    $password = $user_data['password'];

}
?>
<html>
  <head>
    <title>UPDATING ACCOUNTS</title>
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
        <h5> UPDATING ACCOUNTS </h5>
      </head>
<br/>
  <br/>
<body>
  

  <style>

    table {
    border:0px;
    color:black;
    box-shadow:0 0 15px 0;
    vertical-align:top;
    border-radius: 10px 10px 10px 10px;
    }

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
    margin-left:440px;
    margin-top:-50px;
    }


    head {
    background-color: #B720EE;
    text-align: center;
    }

    button {
	border: 1px 1px 1px 1px;
	border-color:royalblue;
    color: black;
    height: 40px;
    width: 200px;
    margin-top:5px;
	margin-right:30px;
    margin-left:30px;
    margin-bottom:5px;
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
    width: 200px;
	margin-right:20px;
    margin-left: 30px;
	  margin-top:5px;
    margin-bottom:5px;
    background-color:snowwhite;
    border-radius: 5px 5px 5px 5px;
    align:center;
    }
	
	 input:hover {
			background-color:royalblue;
		}

    a {
    text-decoration:none;
    color: black;
    }


  </style>

    <body>
	<form name="update_user" method="post" action="edit.php">
		<table border="0" align="center">
			<tr> 
				<td><br><input type="text" name="lastname" value=<?php echo $lastname;?> required></td>
				<td><br><input type="text" name="firstname" value=<?php echo $firstname;?> required></td>
				</tr>
			    <tr> 
				<td><input type="text" name="address" value=<?php echo $address;?> required></td>
				<td><input type="text" name="position" value=<?php echo $position;?> required></td>
				</tr>
			    <tr> 
				<td><input type="text" name="email" value=<?php echo $email;?> required></td>
				<td><input type="text" name="mobile" value=<?php echo $mobile;?> required></td>
				</tr>
			    <tr> 
				<td><input type="text" name="username" value=<?php echo $username;?> required></td>
				<td><input type="password" name="password" value=<?php echo $password;?> required></td>
				</tr>
			    <tr> 
				<td><input type="submit" name="update" value="UPDATE NOW"><br></td>
				<td><button><a href="index.php" >BACK TO LIST</a><br></td>
					</tr>
			    <tr> 
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				
      </tr>
		</table>
	</form>
</body>
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

  </html>

