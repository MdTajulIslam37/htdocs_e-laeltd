<?php
    include("config.php");

    if(isset($_POST['Submit'])) {
		
	   $Name = $_POST['name'];
        $Age = $_POST['age'];
        $Email = $_POST['email'];

        $result = mysqli_query($conn, "INSERT INTO user(name,age,email)VALUES('$Name',$Age,'$Email')");
        
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";

    }
?>