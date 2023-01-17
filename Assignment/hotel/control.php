<?php

include_once('model.php');

class control extends model
{
	
	function __construct()
	{
		
		model::__construct(); 

		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			
			include_once('index.php');
			break;

			case '/booking':
			

			if(isset($_REQUEST['booking']))
			{
				$check_in=$_REQUEST['check_in'];
				$check_out=$_REQUEST['check_out'];
				
				$in_time=$_REQUEST['in_time'];
				$out_time=$_REQUEST['out_time'];
				
				$room_cate=$_REQUEST['room_cate'];
				$shift_cate=$_REQUEST['shift_cate'];

				
			
				$data=array("check_in"=>$check_in, "check_out"=>$check_out, "in_time"=>$in_time, "out_time"=>$out_time, "room_cate"=>$room_cate, "shift_cate"=>$shift_cate);

			
				$res=$this->insert('booking',$data);

				if($res)
				{
					echo "<script> alert('Insert Success')</script>";
				}
				else
				{
					echo "FAILED";
				}
			}
			include_once('booking.php');
			break;

			case '/bookingdetail':
			$booking_arr=$this->select('booking');
			include_once('bookingdetail.php');
			break;
		}
	}
}	
			
			
$obj=new control;
?>