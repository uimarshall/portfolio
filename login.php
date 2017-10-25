<?php include("header.php");?>
<html>
<head>
    <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="E-lib/jquery-1.js"></script>
<script type="text/javascript" src="E-lib/bootstrap.js"></script>
<script type="text/javascript" src="E-lib/myjs.js"></script>
    </head>
<body>

<div class="container">
    <?php
	
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username&&$password) {
        $connect = mysqli_connect("localhost", "root", "") or die("couldn't connect to the database");
        $db = mysqli_select_db($connect, "portal") or die("couldn't find database");

        $sql = ("SELECT * FROM security_sign_in WHERE username = '$username' AND password= '$password'");

        $result = mysqli_query($connect, $sql);
        $numrows = mysqli_num_rows($result);

        if ($numrows !== 0) {
            while ($row = mysqli_fetch_array($result)) {
		
		
                $dusername = $row["username"];
                $dpassword = $row['password'];

                if ($demail == $email && $duser_id == $user_id) {
                    redirect("check.php");
				}
				else
				{
					echo "incorrect user_id/email. kindly check and login again.";
				}
		}
		}else
			{
				echo "please kindly login with your valid user_id/email.";
			}
	}
	
	?>

    </div>
</body>
</html>