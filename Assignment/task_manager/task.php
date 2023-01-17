<!DOCTYPE html>
<html>
<head>
	<title>Task List Manager</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
  		$("#clearall").click(function(){
   		$("#taskdrop").hide();
   		$("#tasklist").hide();
   		$("#listdrop").hide();
   	  	})
  	});



	</script>
	
</head>
<body>
	
	<header>
        <h1>Task List Manager</h1>
    </header>
	<main>
		<h1>
		<?php		
		foreach($addtask as $key=>$value){
			print "<br> $addtask[$key]";
		}
		?></h1> 
		<?php
		$count=0;	
		foreach($tasklist as $key=>$value){
			$count++;
			print "<br>$count. $tasklist[$key]";
		}
		?>
	<form method="post" action="">
		<br>
		<h2>Add Task:</h2>
		<input type="text" name="addtask">
		<input type="hidden" name="submit" value="addtask[]">
        <input type="submit" name="submit" value="Add Task">		
	</form>

	<form method="post" action="" id="taskdrop">
		<br>
		<h2>Task:</h2>
		<select>
		<?php		
		foreach($addtask as $key=>$value){
		?>
		<option> <?php print "$addtask[$key]"; ?> </option>
		<?php
		}
		?>
		</select>
		<!-- <input type="submit" name="submit"
                   value="Unset"
                   onclick="UnsetPreviousSession()">
 -->
	</form>

	<form method="post" action="" id="tasklist">
		<br>
		<h2>Add Task List:</h2>
		<input type="text" name="tasklist" >
        <input type="submit" name="submit" value="Add Task List">		
	</form>


	<form method="post" action="" id="listdrop">
		<br>
		<h2>Task List:</h2>
		<select>
		<?php	
		foreach($tasklist as $key=>$value){
		?>
		<option> <?php print "$tasklist[$key]"; ?> </option>
		<?php
		}
		?>
		</select>
		<input type="submit" name="submit" value="Delete" onclick="Unsettasklist()">
	</form><br>

		<button type="submit" id="clearall">Clear All</button>

	</main>	
</body>
</html>	
