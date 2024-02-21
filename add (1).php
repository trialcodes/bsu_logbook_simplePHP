<html>
	
  <head>
    <title>CREATING ACCOUNT</title>
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
<br/><br/><br/>
        <h3 style="border-radius: 10px 10px 0px 0px;"> BSU ATTENDANCE MONITORY </h3>
        <h5> REGISTRATION </h5>
      </head>
<br/>
<body>
  <style>

    h3 {
    height:50px;
    font-size: 25px;
    color: white;
    font-family: Broadway;
    font-weight: Bold;
    margin-left: 220px;
    margin-top:-180px;
    }

    h5 {
    height:50px;
    font-size: 15px;
    color: white;
    font-family: Arial;
    font-weight: italic;
    margin-left:490px;
    margin-top:-40px;
    }

    table {
    width:320px;
    border:0px;
    color: black;
    box-shadow:0 0 15px 0;
    vertical-align:top;
    border-radius: 10px 10px 10px 10px;
    align:center;
	background-color: white;
    }


    head {
    background-color: #B720EE;
    text-align: center;
	
    }

    .goto1 {
    border: 2px 2px 2px 2px;
	border-color: royalblue;
    color: black;
    height: 40px;
    width: 200px;
    margin-top: 10px;
    margin-bottom:3px;
    background-color: white;
    border-radius: 5px 5px 5px 5px;
	width: 200px;
	margin-left: 15px;
    }
	
	  button:hover {
		  color: black;
		  background-color:royalblue;
		  border: 2px 2px 2px 2px;
		  border-radius: 10px 10px 10px 10px;
	  }


    input {
    border: 2px 2px 2px 2px;
    color: black;
    height: 40px;
    width: 200px;
    margin-left: 15px;
	margin-right: 15px;
    margin-top: 10px;
    margin-bottom: 3px;
    background-color: snowwhite;
    border-radius: 5px 5px 5px 5px;
	border-color: royalblue;
    }
	
	input:hover{
		  color: black;
		  background-color:royalblue;
		  border: 2px 2px 2px 2px;
		   border-radius: 10px 10px 10px 10px;
		
	}

    a {
    text-decoration:none;
	
    }

  </style>


	<form action="add.php" method="post" name="form1">
		<table border="0" align="center">
			<tr> 
				<td></br><input type="text" name="lastname" placeholder="Lastname" required></td>
				<td></br><input type="text" name="firstname" placeholder="Firstname" required></td>
			</tr>
			<tr> 
				<td><input type="text" name="address" placeholder="Address(Brgy,City,Province)" required></td>
				<td><input type="text" name="position" placeholder="Position(ex.:Manager)" required></td>
			</tr>
			<tr> 
				<td><input type="email" name="email" placeholder="Email Address" required></td>
				<td><input type="number" name="mobile" placeholder="Mobile Number" required></td>
				
			</tr>
            <tr> 
				<td><input type="text" name="username" placeholder="Username" required></td>
				<td><input type="password" name="password" placeholder="Password" required></td>
			</tr>
            <tr> 
				<td><input type="submit" name="Submit" value="CREATE" onclick="savemsg()"></td> <td> <br><button class="goto1"> <a href="index.php">GO TO LIST</a></button>
				<br><br></td>
			</tr>
		</table>
		
		 <script>  
		 function savemsg(){ 
		 let savemsg = confirm("CLICK OK TO SAVE INFORMATION?");
		 if (savemsg) { 
		 alert("ACCOUNT REGISTERED SUCCESSFULLY.");
		 } else { 
		  alert("SAVING CANCELLED SUCCESSFULLY.");
		 document.location.reload();
		 } 
		 }
		 </script>
	<?php

    	include_once("config.php");
      
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$address = $_POST['address'];
		$position = $_POST['position'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$username = $_POST['username'];
		$password = $_POST['password'];

            // If email already exists, throw error
            $username_result = mysqli_query($mysqli, "select 'username' from `db_bsumonitory.tb_accounts` where username='$username' and password='$password'");

            // Count the number of row matched 
            $user_matched = mysqli_num_rows($username_result);

            // If number of user rows returned more than 0, it means email already exists
            if ($user_matched > 0) {
                echo "<br/><br/><strong> </strong> <p style='color: white; border: 2px 2px 2px 2px; border-radius:10px 10px 10px 10px; background-color: red; font-size: 17px; height: 60px; text-align:center; width:100%;'> <br> THIS USERENAME IS ALREADY EXISTED '$username' </p>";
            } else {
                // Insert user data into database
                $result   = mysqli_query($mysqli, "INSERT INTO `db_bsumonitory.tb_accounts`(lastname,firstname,address,position,email,mobile,username,password) VALUES('$lastname','$firstname','$address','$position','$email','$mobile','$username','$password')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<p style='color: white; border: 2px 2px 2px 2px; border-radius:10px 10px 10px 10px; background-color: royalblue; font-size: 17px; height: 60px; text-align:center; width:100%;'> <br> ACCOUNT REGISTERED SUCCESSFULLY </p>";
                } else {
                    echo "<p style='color: white; border: 2px 2px 2px 2px; border-radius:10px 10px 10px 10px; background-color: red; font-size: 17px; height: 60px; text-align:center; width:100%;'> <br> WARNING: REGISTRATION ERROR. PLEASE TRY AGAIN. </p>" . mysqli_error($mysqli);
                }
            }
        }

        ?>
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