<html>
	
  <head style="margin-top:150px;position:fixed;">
    <title>Adding New Users</title>
    <img src="logo1.jpeg" width="160" height="150" style="border-radius: 10px 0px 0px 0px;"><img src="bgj.png" width="87%" height="150" style="border-radius: 0px 10px 0px 0px;">
        <h3 style="border-radius: 10px 10px 0px 0px;"> Jesus Is Lord Church Web-Based Application </h3>
        <h5> We will change your vision with faith to God.</h5>
      </head>
<br/>
  <br/>
<body>

<script>


function gotolist(){

let gotolist = confirm("If you wanna go back to list, Click OK. If you want add new again, Click Cancel.");

if (gotolist){ 
alert("Click OK to continue");
}else{
alert("Feel free to add new");
document.location.reload();
}
}
</script>
  <style>

    h3 {
    height:50px;
    font-size: 25px;
    color: white;
    font-family: Broadway;
    font-weight: Bold;
    margin-left:160px;
    margin-top:-120px;
    }

    h5 {
    height:50px;
    font-size: 15px;
    color: white;
    font-family: Arial;
    font-weight: italic;
    margin-left:160px;
    margin-top:-50px;
    }

    table {
    width:650px;
    border:0px;
    color:black;
    box-shadow:0 0 15px 0;
    border-radius: 10px 10px 10px 10px;
    }


    head {
    background-color: #B720EE;
    text-align: center;
    }

    button {
    border: 2px;
    color:white;
    height: 40px;
    width: 280px;
    margin-top:3px;
    margin-left:5px;
    margin-bottom:3px;
    background-color:midnightblue;
    border-radius: 5px 5px 5px 5px;
    }


    input {
    border: 2px;
    color:white;
    height: 40px;
    width: 280px;
    margin-left:5px;
    margin-top:3px;
    margin-bottom:3px;
    background-color:midnightblue;
    border-radius: 5px 5px 5px 5px;
    align:center;
    }

    a {
    text-decoration:none;
    color: white;
    }

  </style>


	<form action="add_details.php" method="post" name="form1" valign="top">
		<table border="0" align="center" valign="top">
		<tr>	<td valign="top" align="center"><p style="color:white; width:280px; background-color:midnightblue; margin-left:5px;"> Personal Information </p>
				<input type="text" name="name" placeholder="Fullname" required><br/>
				<input type="text" name="gender" placeholder="Gender" required><br/>
				<input type="text" name="address" placeholder="Address" required><br/>
				<input type="text" name="contact" placeholder="contact" required>
</td>

<td valign="top" align="center" >
<p style="color:white; width:280px; background-color:midnightblue; margin-left:5px;"> Attendance to Worship Services</p>
          <input type="text" name="week1" placeholder="Week 1" required=""><br/>
          <input type="text" name="week2" placeholder="Week 2" required=""><br/>
          <input type="text" name="week3" placeholder="Week 3" required=""><br/>
          <input type="text" name="week4" placeholder="Week 4" required=""><br/>
          <input type="text" name="week5" placeholder="Week 5" required="">
</td>
<td valign="top" align="center">
<p style="color:white; width:280px; background-color:midnightblue; margin-left:5px;"> Time </p>
          <input type="text" name="first" placeholder="First Mass" required="">
          <input type="text" name="second" placeholder="Second Mass" required="">
      </td></tr>
			<tr> <td></td>
				<td><input type="submit" name="Submit" value="SAVE"></td><td>  <button   ><a href="index.php" onclick="gotolist()">GO TO LIST</a></button></td>
			</tr>
		</table>
	<?php

    	include_once("config.php");
      
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
    $contact = $_POST['contact'];
    $week1 = $_POST['week1'];
     $week2 = $_POST['week2'];
      $week3 = $_POST['week3'];
       $week4 = $_POST['week4'];
        $week5 = $_POST['week5'];
$first = $_POST['first'];
$second = $_POST['second'];
            // If email already exists, throw error
            $username_result = mysqli_query($mysqli, "select 'username' from users where email='$username' and password='$password'");

            // Count the number of row matched 
            $user_matched = mysqli_num_rows($username_result);

            // If number of user rows returned more than 0, it means email already exists
            if ($user_matched > 0) {
                echo "<br/><br/><strong>Error: </strong> User already exists with the email id '$username'.";
            } else {
                // Insert user data into database
                $result   = mysqli_query($mysqli, "INSERT INTO users(name,gender,address,contact,week1,week2,week3,week4,week5,first,second) VALUES('$name','$gender','$address','$contact','$week1','$week2','$week3','$week4','$week5','$first','$second')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<script> alert('Saving details is now successful! Click OK to continue.')</script>";
                } else {
                    echo "<script> alert('Warning: Saving error. Please try again.')</script>'" . mysqli_error($mysqli);
                }
            }
        }

        ?>
    </form>
</body>
    <br/>
  <footer>
    <br/>
    <img src="bgj.png" width="87%" height="150" style="border-radius: 0px 0px 0px 10px; margin-top:-20px;" ><img src="logo1.jpeg" width="160" height="150" style="border-radius: 0px 0px 10px 0px; margin-top:-20px;">
        <h5>
          Copyright 2022 | Powered by: <a href="">ANGEL GRACE GANIBAN </a> | All Right Reserved.
        </h5>
      </footer>
</html>
