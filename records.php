<html>
  <head>
      <title>LISTS</title>
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
  <?php
// Create database connection using config file
include("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM `db_bsumonitory.tb_attendance` ORDER BY id DESC");
?>

  <body>
<br/>
    <br/>
    
    <style>

      table {
      border:0px;
      color:black;
      box-shadow:0 0 15px 0;
      vertical-align:top;
	  margin-top: -120px
      border-radius: 10px 10px 10px 10px;
   `` width:80%;
      }

      h3 {
      height:50px;
      font-size: 25px;
      color: white;
      font-family: Broadway;
      font-weight: Bold;
      margin-left: 220px;
      margin-top:-120px;
      }

      h5 {
      height:50px;
      font-size: 15px;
      color: white;
      font-family: Arial;
      font-weight: italic;
      margin-left: 485px;
      margin-top:-50px;
      }

      head {
      background-color: #B720EE;
      text-align: center;
      position:fixed;
      margin-bottom:100px;
	  
      }

      button {
      border: 1px 1px 1px 1px;
	  border-color: royalblue;
      color: black;
      height: 40px;
      width: 50px;
      margin-top:3px;
      margin-bottom:3px;
      background-color:white;
      border-radius: 5px 5px 5px 5px;
	  
      }
	  
	    button:hover{
		    background-color:royalblue;
	  }

      th {
      color: white;
      height:40px;
      background-color: royalblue;
	  font-family: Tahoma;
      font-size: 13px;
	  
      }

      td {
      color: black;
      height: 25px;
      background-color:whitesmoke;
      border-radius: 0px 0px 0px 0px;
      vertical-align:top;
      font-size:15px;
	  
      }
	  
	  .hov_list1:hover{
		    background-color: royalblue;
			color: white;
			
	  }
	  
	  .hov_list:hover{
		    background-color: royalblue;
			color: white;
		
	  }
	  

      a {
      text-decoration:none;
      margin-left: 2px;
      align:center;
	  color: black;
      }

      a hover  {
      background-color:royalblue;
      color: black;
      }

    </style>

 
    <table  align="center" valign="center">
	<tr>
	<th>
	<div class="id">
      <label>
        <button type="button" class="btn btn-default" style="margin-left:13px;">
          <a href="add_details.php" class="btn btn-default" role="button"> ADD </a>
        </button></th>
		<th>
        <button type="button" class="btn btn-default" style="margin-left:5px;">
          <a href="logout.php" class="btn btn-default" role="button"> OUT </a>
        </button>
        <br/>
      </label>
    </div>
	</th>
	</tr>
	<tr>
		<th width = "100"> Date </th>
        <th width = "70"> Student No. </th>
        <th width = "80"> Fullname </th>
        <th width = "55"> Course </th>
        <th width = "35"> Section </th>
	    <th width = "35"> Gender </th>
        <th width = "200"> Address </th>
        <th width = "30"> Contact. No. </th>
        <th width = "50"> Marks </th>
        <th width = "200"> Action </th>
      </tr>
      <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr class='hov_list1'>";
		echo "<td class='hov_list' valign='center' width = '120'>".$user_data['todaydate']."</td>";
		echo "<td class='hov_list' valign='center' width = '100'>".$user_data['stud_no']."</td>";
         echo "<td class='hov_list' valign='center' width = '150'>".$user_data['fullname']."</td>";
          echo "<td class='hov_list' valign='center' width = '75'>".$user_data['course']."</td>";
		echo "<td class='hov_list' valign='center' width = '75'>".$user_data['mysection']."</td>";
        echo "<td class='hov_list'  valign='center' width = '75'>".$user_data['gender']."</td>";
		echo "<td class='hov_list' valign='center' width = '200'>".$user_data['address']."</td>";
		echo "<td class='hov_list' valign='center' width = '100'>".$user_data['contact_no']."</td>";
		echo "<td class='hov_list' valign='center' width = '70'>".$user_data['marks']."</td>";
		echo "<td valign='center' width = '50'><center><button type='button' class='btn btn-default'><a href='edit.php?id=$user_data[id]'>EDIT</a>  </button> <button type='button' class='btn btn-default'> <a href='delete.php?id=$user_data[id]'>DEL</a></button></center></td></tr>";
        }
    ?>
    </tr>
	</table>
    <br/>
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




