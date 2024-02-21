<html>
  <head>
    <title>BSU-ACCOUNTLIST</title>
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
        <h5> LIST OF ACCOUNTS </h5>
      </head>
<body>
  
  <?php
// Create database connection using config file
include("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM `db_bsumonitory.tb_accounts` ORDER BY id DESC");
?>

  <body>
   
    <style>

      table {
      border:0px;
      color:black;
      box-shadow:0 0 15px 0;
      vertical-align: top;
      border-radius: 5px 5px 5px 5px;
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
      margin-left:460px;
      margin-top:-50px;
      }

      head {
      background-color: #B720EE;
      text-align: center;
      }

      button {
      border: 2px 2px 2px 2px;
      color: black;
      height: 40px;
      width: 90px;
      margin-top:3px;
	  margin-left:20px
	  margin-right:10px;
      margin-bottom:3px;
      background-color:white;
      border-radius: 5px 5px 5px 5px;
	  
      }
	  
	  button:hover {
		  
		   background-color:royalblue;
		  
	  }

      th {
      color: black;
      height: 40px;
	  font-family: tahoma;
	  font-size: 13px;
	  color: white;
      align: center;
	  border: 0px 2px 0px 2px;
      background-color: royalblue;
      border-radius: 0px 0px 0px 0px;
      }

      td {
      color: black;
      height: 25px;
      background-color:snowwhite;
      border-radius: 0px 0px 0px 0px;
      vertical-align:center;
	  text-align: center;
	  width:100px;
	  border:2px;
	  border-color:royalblue;
      }

      a {
      text-decoration:none;
      color:black;
      margin-left: 2px;
      align:center;
      }

      a hover  {
      background-color: royalblue;
      color:black;
      text-decoration:bold;
      }
	  .thbackg1 {
		  width:90px;
		  height:40;
	  }
	  .thbackg2 {
		  width:180px;
		  height:40;
	  }
	  
	  .thbackg2:hover {
		   background-color:snowwhite;
	  }
	  
	  .colback1:hover {
	  background-color:royalblue;
	  opacity:92px;
	  
	  }
	  .bgwhite {
		  background-color:snowwhite;
	  }

    </style>
    <table width="85%"  align="center">
<tr><th> <div class="id">
      <label>
          <button type="button" style="margin-left:0px; width:150px;">
          <a href="add.php" class="btn btn-default" role="button" onclick="signmsg()"> SIGN UP</a>
        </button>
        <br/>
      </label>
    </div>
	</th>
	<th> <div class="id">
      <label>
          <button type="button" style="margin-left:0px; width:150px;">
		  <a href="../index.php" class="btn btn-default" role="button" onclick="logmsg()"> LOGIN NOW </a>
        </button>
        <br/>
      </label>
    </div>
	</th>
	</tr>
      <tr>
        <th class="thbackg1">LastName</th>
		<th class="thbackg1">FirstName</th>
		<th class="thbackg1">Address</th>
		<th class="thbackg1">Position</th>
        <th class="thbackg1">Mobile</th>
        <th class="thbackg1">Email</th>
        <th class="thbackg1">Username </th>
        <th class="thbackg2">Action</th>
      </tr>
      <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr class='colback1'>";
        echo "<td class='colback12'>".$user_data['lastname']."</td>";
		echo "<td class='colback12'>".$user_data['firstname']."</td>";
		echo "<td class='colback12'>".$user_data['address']."</td>";
		echo "<td class='colback12'>".$user_data['position']."</td>";
        echo "<td class='colback12'>".$user_data['mobile']."</td>";
        echo "<td class='colback12'>".$user_data['email']."</td>";
        echo "<td class='colback12'>".$user_data['username']."</td>";

        echo "<td align='center' class='bgwhite'><button type='button' class='mybtn'><a href='edit.php?id=$user_data[id]' onclick='editmsg()'>  EDIT  </a>  </button>
 <button type='button' class='mybtn'> <a href='delete.php?id=$user_data[id]' onclick='delmsg()'>  DELETE   </a></button></td></tr>";
        }
    
    ?>
    </table>
	
	 <script>  
		 function signmsg(){ 
		 let signmsg = confirm("CLICK OK TO SIGNUP INFORMATION?");
		 if (signmsg) { 
		 alert("CLICK OK TO CONTINUE.");
		 } else { 
		  alert("SIGNING UP CANCELLED SUCCESSFULLY.");
		 document.location.reload();
		 } 
		 }
		
		function logmsg(){ 
		 let signmsg = confirm("CLICK OK TO LOGIN.");
		 if (signmsg) { 
		 alert("CLICK OK TO CONTINUE.");
		 } else { 
		  alert("LOGGING IN CANCELLED SUCCESSFULLY.");
		 document.location.reload();
		 } 
		 }
		 
		  function delmsg(){ 
		 let delmsg = confirm("CLICK OK TO DELETE THIS ACCOUNT?");
		 if (delmsg) { 
		 alert("AN ACCOUNT WAS DELETED SUCCESSFULLY.");
		 } else { 
		  alert("DELETING ACCOUNT CANCELLED SUCCESSFULLY.");
		 document.location.reload();
		 } 
		 }
		 
		 function editmsg(){ 
		 let editmsg = confirm("CLICK OK TO UPDATE THIS ACCOUNT?");
		 if (editmsg) { 
		 alert("YOU ARE ABOUT TO UPDATE AN ACCOUNT.");
		 } else { 
		  alert("UPDATING ACCOUNT CANCELLED SUCCESSFULLY.");
		 document.location.reload();
		 } 
		 }
		 </script>
		 
		 

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
