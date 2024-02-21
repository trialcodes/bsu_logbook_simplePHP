
<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$stud_no=$_POST['stud_no'];
	$fullname=$_POST['fullname'];
	$course=$_POST['course'];
	$mysection=$_POST['mysection'];
	$gender=$_POST['gender'];
    $address=$_POST['address'];
    $contact_no=$_POST['contact_no'];
    $todaydate=$_POST['todaydate'];
    $marks=$_POST['marks'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE  `db_bsumonitory.tb_attendance` SET id='$id', stud_no='$stud_no', fullname='$fullname', course='$course', mysection='$mysection', gender='$gender', address='$address', contact_no='$contact_no', todaydate='$todaydate' ,marks='$marks' WHERE id=$id");
	
  if ($result) {
                    echo "<p style='color: white; border: 2px 2px 2px 2px; border-radius:10px 10px 10px 10px; background-color: royalblue; font-size: 17px; height: 60px; text-align:center; width:100%;'> <br> 'fullname' INFORMATION IS NOW UPDATED SUCCESSFULLY. </p>";
                } else {
                    echo "<p style='color: white; border: 2px 2px 2px 2px; border-radius:10px 10px 10px 10px; background-color: royalblue; font-size: 17px; height: 60px; text-align:center; width:100%;'> <br> UPDATING ERROR: PLEASE TRY AGAIN. </p>" . mysqli_error($mysqli);
                }

	// Redirect to homepage to display updated user in list
header("Location: records.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM `db_bsumonitory.tb_attendance` WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$stud_no = $user_data['stud_no'];
	$fullname = $user_data['fullname'];
	$course = $user_data['course'];
	$mysection = $user_data['mysection'];
    $gender= $user_data['gender'];
	$address = $user_data['address'];
    $contact_no = $user_data['contact_no'];
	$todaydate = $user_data['todaydate'];
	$marks = $user_data['marks'];
}
?>
<html>
      <title>UPDATING MONITORY</title>
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
        <h5> MONITORY LIST </h5>
      </head>

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
    margin-left:485px;
    margin-top:-50px;
    }


    head {
    background-color: #B720EE;
    text-align: center;
    }

    button {
	border : 1px 1px 1px 1px;
	border-color: royalblue;
    border-radius: 5px 5px 5px 5px;
    color: black;
    height: 40px;
    width: 280px;
    margin-top:3px;
    margin-left:5px;
    margin-bottom:3px;
    background-color:white;
 
    }
	
	button:hover{ 
    background-color: royalblue;
    color:white;
	}


    input {
    border : 1px 1px 1px 1px;
	border-color: royalblue;
    border-radius: 5px 5px 5px 5px;
    color: black;
    height: 40px;
    width: 280px;
    margin-left:5px;
    margin-top:3px;
    margin-bottom:3px;
    background-color:white;
    align:center;
    }
	
	 .selectnow {
    border : 1px 1px 1px 1px;
	border-color: royalblue;
    border-radius: 5px 5px 5px 5px;
    color: black;
    height: 40px;
    width: 280px;
    margin-left:5px;
    margin-top:3px;
    margin-bottom:3px;
    background-color:white;
    align:center;
    }
	
	input:hover{ 
    background-color: royalblue;
    color:white;
	}

	.selectnow:hover{ 
    background-color: royalblue;
    color:white;
	}

    a {
    text-decoration:none;
    }


  </style>

    <body>

<script>

function editmsg(){ 
		 let editmsg = confirm("CLICK OK TO UPDATE THIS ACCOUNT?");
		 if (editmsg) { 
		 alert("AN ACCOUNT WAS UPDATED SUCCESSFULLY.");
		 } else { 
		  alert("UPDATING ACCOUNT CANCELLED SUCCESSFULLY.");
		 document.location.reload();
		 } 
		 }
		
	function backmsg(){ 
		 let editmsg = confirm("CLICK OK TO GET BACK TO LIST OF ACCOUNT.");
		 if (editmsg) { 
		 alert("YOU ARE NOW IN THE LIST OF ACCOUNT.");
		 } else { 
		  alert("GOING BACK TO LIST OF ACCOUNT CANCELLED SUCCESSFULLY.");
		 document.location.reload();
		 } 
		 }	
		
		</script>

	
	<form name="update_user" method="post" action="edit.php">
		<table border="0" align="center">
			<tr> 
				<td><input type="number" name="stud_no" value=<?php echo $stud_no;?> required>
        </td>
			<td><input type="text" name="fullname" value=<?php echo $fullname;?> required>
        </td>
		</tr>
		<tr>
		<td><input type="text" name="course" value=<?php echo $course;?> required>
        </td>
		<td><input type="text" name="mysection" value=<?php echo $mysection;?> required>
        </td>
		</tr>
		<tr>
		<td><select class="selectnow" name="gender" value=<?php echo $gender;?> required> 
		<option value="MALE"> MALE </option>
		<option value="FEMALE"> FEMALE </option>
		</select>
        </td>
        <td>
         <input type="text" name="address" value=<?php echo $address;?> required>
        </td>
		</tr>
        <tr>
        <td>
        <input type="number" name="contact_no" value=<?php echo $contact_no;?> required>
        </td>
        <td>
        <input type="datetime-local" name="todaydate" value=<?php echo $todaydate;?> required>
        </td>
		</tr>
        <tr>
        <td>
          <select class="selectnow" name="marks" value=<?php echo $marks;?> required> 
		  <option value="PRESENT> PRESENT </option>
		   <option value="ABSENT"> ABSENT </option>
		  </select>
		  
        </td>
		<td>
          
        </td>
      </tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
        </td>
			</tr>
      <tr>
		<td><input type="submit" name="update" value="UPDATE NOW" onclick="editmsg()"></td>
		
        <td>
          <button>
            <a href="records.php" onclick="backmsg()">BACK TO LIST</a>
          </button>
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

