<html>
	<!-- Custom font from Google -->
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- MetisMenu CSS -->
    <link href="metisMenu.min.css" rel="stylesheet">

	<style>
		.table-hover tbody tr:hover td {
		    background: lightgray;
		}
	</style>

	<body>

		<div class="col-md-3">
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="index.html">
	                	<?php
	                	require("common.php"); 
		                $arr = array_values($_SESSION['user']);
						echo "Welcome, " . $arr[1];
						?>			
					</a>
	            </div>

	            <div class="navbar-default sidebar" role="navigation">
	                <div class="sidebar-nav navbar-collapse">
	                    <ul class="nav" id="side-menu">
	                        <br><br>
	                        <li>
	                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Examples</a>
	                        </li>
	                        <li>
	                            <a href="#"><i class="fa fa-book fa-fw"></i> Common Codes<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="morse.html"><i class="fa fa-ellipsis-v fa-fw"></i>Morse Code</a>
	                                </li>
	                                <li>
	                                    <a href="binary.html"><i class="fa fa-power-off fa-fw"></i>Binary</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
	                        <li>
	                            <a href="leet.html"><i class="fa fa-at fa-fw"></i> Leet</a>
	                        </li>
	                        <li>
	                            <a href="emoji.html"><i class="fa fa-smile-o fa-fw"></i> Emoji</a>
	                        </li>
	                        <li>
	                            <a href="vowel.html"><i class="fa fa-font fa-fw"></i> No Vowels</a>
	                        </li>
	                        <li>
	                            <a href="#"><i class="fa fa-child fa-fw"></i> Personalities<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="gangsta.html">Gangsta Talk</a>
	                                </li>
	                                <li>
	                                    <a href="pirate.html">Pirate Speak</a>
	                                </li>
	                                <li>
	                                    <a href="big.html">Big Words</a>
	                                </li>
	                                <li>
	                                    <a href="typography.html">Typography</a>
	                                </li>
	                                <li>
	                                    <a href="icons.html"> Icons</a>
	                                </li>
	                                <li>
	                                    <a href="grid.html">Grid</a>
	                                </li>
	                            </ul>
	                        </li>
	                        <li>
	                            <a href="custom.html"><i class="fa fa-gear fa-fw"></i> Custom Dictionary</a>
	                        </li>
	                    </ul>
	                </div>
	                <!-- /.sidebar-collapse -->
	            </div>
	            <!-- /.navbar-static-side -->
	        </nav>
		</div>




	<div class="col-md-9">

		<div class="row">
	        <div class="col-lg-12">
	            <h1 class="page-header">Welcome to the Database</h1>
	        </div>
	    </div>
	    

		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Entry Submission</h3>
			</div>
		<div class="panel-body">

	   	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
	   	<div class="grid">
		    <div class="row">
	  			<div class="col-lg-12">
		    	<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">Country</span>
				  <input type="text" name="country" class="form-control" placeholder="Ex: Rainbowland" aria-describedby="basic-addon1">
				  <span class="input-group-addon" id="basic-addon1">National Animal</span>
				  <input type="text" name="animal" class="form-control" placeholder="Ex: Unicorn" aria-describedby="basic-addon1">
				  	<div class="input-group-btn">
				  		<input type="submit" name="submit" class="btn btn-success center-block">
				  	</div>
				</div>
				</div>
			</div>
		</div>
	    </form>

			</div>
		</div>

		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Database Entries & Submission</h3>
			</div>
		<div class="panel-body">
		<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
	   	<div class="grid">
		    <div class="row">
	  			<div class="col-lg-12">
		    	<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">Country</span>
				  <input type="text" name="country" class="form-control" placeholder="Ex: Rainbowland" aria-describedby="basic-addon1">
				  <span class="input-group-addon" id="basic-addon1">National Animal</span>
				  <input type="text" name="animal" class="form-control" placeholder="Ex: Unicorn" aria-describedby="basic-addon1">
				  <div class="input-group-btn">
				  <input type="submit" name="submit" class="btn btn-success center-block">
				  </div>
				</div>
				</div>
			</div>
		</div>
	    </form>
		</div>
    
	<?php
	
	    // pass in some info;
		require("common.php"); 
		
		if(empty($_SESSION['user'])) { 
  
			// If they are not, we redirect them to the login page. 
			$location = "http://" . $_SERVER['HTTP_HOST'] . "/login.php";
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
			//exit;
         
        	// Remember that this die statement is absolutely critical.  Without it, 
        	// people can view your members-only content without logging in. 
        	die("Redirecting to login.php"); 
    	} 
		
		// To access $_SESSION['user'] values put in an array, show user his username
		$arr = array_values($_SESSION['user']);
		echo "Welcome, " . $arr[1];

		// open connection
		$connection = mysql_connect($host, $username, $password) or die ("Unable to connect!");

		// select database
		mysql_select_db($dbname) or die ("Unable to select database!");

		// create query
		$query = "SELECT * FROM symbols";
       
		// execute query
		$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

		// see if any rows were returned
		if (mysql_num_rows($result) > 0) {

    		// print them one after another
    		echo "<table class='table table-hover'>";
    		echo "<th>Index</th><th>Country</th><th>Animal</th><th></th>";
    		while($row = mysql_fetch_row($result)) {
        		echo "<tr>";
				echo "<td>".$row[0]."</td>";
        		echo "<td>" . $row[1]."</td>";
        		echo "<td>".$row[2]."</td>";
				echo "<td><a href=".$_SERVER['PHP_SELF']."?id=".$row[0].">Delete</a></td>";
        		echo "</tr>";
    		}
		    echo "</table>";

		} else {
			
    		// print status message
    		echo "No rows found!";
		}

		// free result set memory
		mysql_free_result($result);

		// set variable values to HTML form inputs
		$country = mysql_escape_string($_POST['country']);
    	$animal = mysql_escape_string($_POST['animal']);
		
		// check to see if user has entered anything
		if ($animal != "") {
	 		// build SQL query
			$query = "INSERT INTO symbols (country, animal) VALUES ('$country', '$animal')";
			// run the query
     		$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
			// refresh the page to show new update
	 		echo "<meta http-equiv='refresh' content='0'>";
		}
		
		// if DELETE pressed, set an id, if id is set then delete it from DB
		if (isset($_GET['id'])) {

			// create query to delete record
			echo $_SERVER['PHP_SELF'];
    		$query = "DELETE FROM symbols WHERE id = ".$_GET['id'];

			// run the query
     		$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
			
			// reset the url to remove id $_GET variable
			$location = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
			echo '<META HTTP-EQUIV="refresh" CONTENT="0;URL='.$location.'">';
			exit;
			
		}
		
		// close connection
		mysql_close($connection);

	?>

	</div>

    
    <!-- This is the HTML form that appears in the browser -->
   	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    	Country: <input type="text" name="country">
    	National animal: <input type="text" name="animal">
    	<input type="submit" name="submit">
    </form>
    <form action="logout.php" method="post"><button>Log out</button></form>

    <!-- jQuery -->
    <script src="jquery.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="metisMenu.min.js"></script>
    
	</body>
</html>