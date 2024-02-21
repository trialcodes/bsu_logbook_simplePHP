<html>

  <head>
      <title>ATTENDANCE</title>
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
        <h5> ATTENDANCE </h5>
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
      margin-left: 280px;
      margin-top: -120px;
      }

      h5 {
      height:50px;
      font-size: 15px;
      color: white;
      font-family: Arial;
      font-weight: italic;
      margin-left: 560px;
      margin-top:-50px;
      }

      table {
      width:295px;
      border:0px;
      color:black;
      box-shadow:0 0 15px 0;
      vertical-align:top;
      border-radius: 5px 5px 5px 5px;
      align:center;
      }


      head {
      background-color: #B720EE;
      text-align: center;
      }

      button {
      border: 1px 1px 1px 1px;
	  border-color:royalblue;
      color:white;
      height: 40px;
      width: 280px;
      margin-top:3px;
      margin-left:5px;
      margin-bottom:3px;
      background-color:snowwhite;
      border-radius: 5px 5px 5px 5px;
      }
	  
	    button:hover{
		    background-color:royalblue;
	  }


      input {
      border: 0px 0px 0px 0px;
	  border-color:royalblue;
      color:black;
      height: 40px;
      width: 280px;
      margin-left:5px;
      margin-top:3px;
      margin-bottom:3px;
      background-color:snowwhite;
      border-radius: 5px 5px 5px 5px;
      align:center;
      }
	  
	  input:hover{
		    background-color:royalblue;
	  }
	  
	  .selectnow {
      border: 3px 3px 3px 3px;
	  border-color:royalblue;
      color: black;
      height: 40px;
      width: 280px;
      margin-left:5px;
      margin-top:3px;
      margin-bottom:3px;
      background-color:snowwhite;
      border-radius: 5px 5px 5px 5px;
      align:center;
      }
	  
	    .selectnow:hover{
		    background-color:royalblue;
	  }

      a {
      text-decoration:none;
      color: black;
      }

    </style>


    <form action="add_details.php" method="post" name="form1">
      <table border="0" align="center">
        <tr>
		<td>
          <input type="number" name="stud_no" placeholder="Student No." required="">
          </td>
          <td>
            <input type="text" name="fullname" placeholder="Fullname" required="">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="course" placeholder="Course" required="">
          </td>
          <td>
            <input type="text" name="mysection" placeholder="Section" required="">
          </td>
        </tr>
        <tr>
          <td>
            <select class="selectnow" name="gender" placeholder="MALE/FEMALE" required="" >
			<option value="MALE">MALE</option>
			<option value="FEMALE">FEMALE</option>
			</select>
        </td>
		<td>
            <input type="text" name="address" placeholder="Address" required="">
        </td>
        </tr>
        <tr>
          <td>
            <input type="number" name="contact_no" placeholder="CP No./Tel. No." required="">
        </td>
          <td>
            <input type="datetime-local" name="todaydate" value="datetime-local" placeholder="" required="">
        </td>
        </tr>
        <tr>
          <td>
            <select class="selectnow" name="marks" placeholder="PRESENT/ABSENT" required="" >
			<option value="PRESENT">PRESENT</option>
			<option value="ABSENT">ABSENT</option>
			</select>
        </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="Submit" value="SAVE">
			</td>
			<td>
              <button> 
                <a href="records.php">GO TO LIST</a>
              </button>
          </td>
        </tr>
      </table>
      <?php

    	include_once("config.php");
      
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$stud_no = $_POST['stud_no'];
		$fullname = $_POST['fullname'];
		$course = $_POST['course'];
		$mysection= $_POST['mysection'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$contact_no = $_POST['contact_no'];
		$todaydate = $_POST['todaydate'];
		$marks = $_POST['marks'];
            // If email already exists, throw error
           // $username_result = mysqli_query($mysqli, "select 'username' from users where email='$username' and password='$password'");

            // Count the number of row matched 
          //  $user_matched = mysqli_num_rows($username_result);

            // If number of user rows returned more than 0, it means email already exists
          //  if ($user_matched > 0) {
            //    echo "<br/><br/><strong>Error: </strong> User already exists with the email id '$username'.";
           // } else {
                // Insert user data into database
                $result   = mysqli_query($mysqli, "INSERT INTO `db_bsumonitory.tb_attendance`(stud_no,fullname,course,mysection,gender,address,contact_no,todaydate,marks) VALUES('$stud_no','$fullname','$course','$mysection','$gender','$address','$contact_no','$todaydate','$marks')");

                // check if user data inserted successfully.
                if ($result) {
                     echo "<p style='color: white; border: 2px 2px 2px 2px; border-radius:10px 10px 10px 10px; background-color: royalblue; font-size: 17px; height: 60px; text-align:center; width:100%;'> <br> '$fullname' IS NOW SAVED IN MONITORY LIST SUCCESSFULLY. </p>";
                } else {
                    echo "<p style='color: white; border: 2px 2px 2px 2px; border-radius:10px 10px 10px 10px; background-color: red; font-size: 17px; height: 60px; text-align:center; width:100%;'> <br> WARNING: SAVING ERROR. PLEASE TRY AGAIN. </p>" . mysqli_error($mysqli);
                }
            }
       // }

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