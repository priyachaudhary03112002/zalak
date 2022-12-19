<?php
session_start();


if(isset($_SESSION['addtask'])) // for add task
{
	$addtask=$_SESSION['addtask'];
}else{
	$addtask=[];
}
if (isset($_POST['addtask'])) {
	$addtask[]=$_POST['addtask'];
}
$_SESSION['addtask'] = $addtask;


if(isset($_SESSION['tasklist'])) // for add task list
{
	$tasklist=$_SESSION['tasklist'];
}else{
	$tasklist=[];
}
if (isset($_POST['tasklist'])) {
	$tasklist[]=$_POST['tasklist'];
}
$_SESSION['tasklist'] = $tasklist;


// if(!isset($_SESSION["addtask"]))
//     {
//         $_SESSION["addtask"] = $addtask;
//     }
//     else
//     { 
//         UnsetPreviousSession();
//     }
//     function UnsetPreviousSession()
//     {
//        unset($_SESSION['addtask']); 
//     }

if (!isset($_SESSION["tasklist"])) {
         $_SESSION["tasklist"] = $_GET["tasklist"];        
   }else
    { 
        Unsettaskllist();
    }


 function Unsettaskllist()
    {   
      
       unset($_SESSION['tasklist']);
}
   

include('task.php');

?>