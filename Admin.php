<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="css/AdminStyle.css">
</head>
<!-- Body -->
<body class="body" background="img/grey-background-pattern.png">
<div class="middle">
<div class="table">
<table border="2">
  <thead>
    <tr>
      <th>Name</th>
      <th>Password</th>
	  <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php
	include "db/connect.php";
	$resultSet = mysqli_query($flag,"select * from dbtable");			 
     
        while($row = mysqli_fetch_array($resultSet))
		{
         echo "<tr><td>{$row['username']}</td><td>{$row['password']}</td><td>{$row['cpassword']}</td></tr>\n"; 
		}
      
    ?>
  </tbody>
</table>
</div>
<br>
<form method=post action="Admin.php">
			  
			
              <?php
              if(isset($_POST['delete']))
	           {
                $a= $_POST['Name'];
                $sql = "DELETE FROM dbtable WHERE username = '$a'";
                mysqli_query($flag,$sql);
			   }
	          ?>
			   Delete User: <input name="Name" size="10"><br>
               <input type="Submit" name="delete" value="Delete">
			   <br> <br>
			   </form>
			    <form method=post action="Admin.php">
			  <label>Username</label>
				<input type="text" ID="username"name="username"><br>
				<label>Password</label>
				<input type="password" ID="password" name="password"><br>
				<label>Email</label>
				<input type="password" ID="cpassword"  name="cpassword">
			  
			 
              <?php
              if(isset($_POST['register']))
				{
					include "db/connect.php";
					 $username = $_POST['username'];
					 $password = $_POST['password'];
					 $cpassword = $_POST['cpassword'];
					 
					$query = "select * from dbtable WHERE username = '$username'";
					$query_run = mysqli_query($flag,$query);
					if(mysqli_num_rows($query_run)>0)
					{
						echo '<script type = "text/javascript"> alert("Username exists!") </script>';
					}
					else
					{
						$query = "insert into dbtable values ('$username','$password','$cpassword')";
						$query_run = mysqli_query($flag,$query);
						
						if($query_run)
						{
					echo '<script type = "text/javascript"> alert("Registered!") </script>';
						}
					}
					}
					
				
	          ?>
			  <br>
			  
			  <button name="register" type="submit">Insert User</button>
			  <br>
			  </form>
			  <form method=post action="Admin.php">
			  <br>
			  
			     <label>Username</label>
				<input type="text" ID="username"name="username"><br>
				<label>Password</label>
				<input type="password" ID="password" name="password"><br>
				<label>Email</label>
				<input type="password" ID="cpassword" name="cpassword">
				<br>
				<button name="update" type="submit">Update User</button>
				<br>
				<?php
				include "db/connect.php";
				 if(isset($_POST['update']))
				 {
					 $username = $_POST['username'];
					 $password = $_POST['password'];
					 $cpassword = $_POST['cpassword'];
					 $query = "update dbtable set password='$password',cpassword='$cpassword' WHERE username = '$username'";
					$query_run = mysqli_query($flag,$query);
					if($query_run)
						{
					echo '<script type = "text/javascript"> alert("User Updated") </script>';
						}
						
				 }
				?>
				</form>
			 
 <div>
				 <br><a href="LoginPage.php"><button  type="button">Back</button></a>
 </div>
 
 
 </div>
 </body>
</html>