<html>
	<body>

	<?php
		require("common.php"); 
		$connection = mysql_connect($host, $username, $password) or die ("Unable to connect!");
		mysql_select_db($dbname) or die ("Unable to select database!");

		$search = mysql_escape_string($_POST['search']);
		$query = "SELECT country FROM symbols WHERE animal LIKE '%$search%'";
		$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

		if (mysql_num_rows($result) > 0) {

    		// print them one after another
    		echo "<table cellpadding=10 border=1>";
    		while($row = mysql_fetch_row($result)) {
        		echo "<tr>";
				echo "<td>".$row[0]."</td>";
        		//echo "<td>" . $row[1]."</td>";
        		//echo "<td>".$row[2]."</td>";
				//echo "<td><a href=".$_SERVER['PHP_SELF']."?id=".$row[0].">Delete</a></td>";
        		echo "</tr>";
    		}
		    echo "</table>";

		} else {
			
    		// print status message
    		echo "No rows found!";
		}
	?>
    
    
    <!-- This is the HTML form that appears in the browser -->
   	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    	Search: <input type="text" name="search">
    	National animal: <input type="text" name="animal">
    	<input type="submit" name="submit">
    </form>
    <form action="logout.php" method="post"><button>Log out</button></form>
    
	</body>
</html>



