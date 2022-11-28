<?php

include_once('../admin/model.php');  // step 1  load mopdel 

class control extends model // step 2 extends model
{
	
	function __construct()
	{
		session_start();
		model::__construct(); // step 3 call model __construct();
		
		$path=$_SERVER['PATH_INFO'];// http://localhost/students/02Aug_PHP_Rajesh/project/website/control.php
		
		switch($path)
		{
			case '/':
			include_once('index.php');
			break;
			
			case '/index':
			include_once('index.php');
			break;
			
			case '/about':
			include_once('about.php');
			break;
			
			case '/product':
			include_once('product.php');
			break;
			
			case '/shop':
			include_once('shop.php');
			break;
			
			case '/detail':
			include_once('detail.php');
			break;
			
			case '/service':
			include_once('service.php');
			break;
			
			case '/contact-us':
			include_once('contact-us.php');
			break;
			
			case '/cart':
			include_once('cart.php');
			break;

			case '/checkout':
			include_once('checkout.php');
			break;
			
			case '/contact':
			include_once('contact.php');
			break;

			case '/profile':
			$where=array('cust_id'=>$_SESSION['cust_id']);
			$run=$this->select_where('customer',$where);
			$fetch=$run->fetch_object();
			include_once('profile.php');
			break;

			case '/edit-profile':
			if(isset($_REQUEST['btncust_id']))
			{
				$cust_id=$_REQUEST['btncust_id'];
				$where=array('cust_id'=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				$old_file=$fetch->image;
				
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$address=$_REQUEST['address'];
					$mobile=$_REQUEST['mobile'];
					$email=$_REQUEST['email'];
					$password=$_REQUEST['password'];
					$enc_password=md5($password);
					$gender=$_REQUEST['gender'];
					$language_arr=$_REQUEST['language'];
					$language=implode(",",$language_arr);
					
					
					$image=$_FILES['image']['name'];  // get only input type="file"
					$path='images/upload/'.$image;   // PATH
					$tmp_image=$_FILES['image']['tmp_name']; // GET DUPLICATE IMG
					move_uploaded_file($tmp_image,$path); // MOVE DUP IMG IN PATH
					
					if($_FILES['image']['size']>0)
					{
						$data=array("name"=>$name,"address"=>$address,"mobile"=>$mobile,"gender"=>$gender,"language"=>$language,"image"=>$image);
						$res=$this->update_where('customer',$data,$where);
					
					
						if($res)
						{
							unlink('img/upload/'.$old_file); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
						}
					}
					else
					{
						$data=array("name"=>$name,"address"=>$address,"mobile"=>$mobile, "gender"=>$gender,"language"=>$language);
						$res=$this->update_where('customer',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
						}
					}
					
				}
				
			}
			include_once('edit-profile.php');
			break;
			
			case '/my-account':
			include_once('my-account.php');
			break;
			
			case '/signup':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$address=$_REQUEST['address'];
				$mobile=$_REQUEST['mobile'];
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				$gender=$_REQUEST['gender'];
				$language_arr=$_REQUEST['language'];
				$language=implode(",",$language_arr);
				$birthdate=$_REQUEST['birthdate'];
				
				$image=$_FILES['image']['name'];  // get only input type="file"
				$path='images/upload/'.$image;   // PATH
				$tmp_image=$_FILES['image']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_image,$path); // MOVE DUP IMG IN PATH
				
				$data=array("name"=>$name,"address"=>$address,"mobile"=>$mobile,"email"=>$email,"password"=>$enc_password,"gender"=>$gender,"language"=>$language,"image"=>$image);
				
				
				$res=$this->insert('customer',$data);
				if($res)
				{
					echo "<script> alert('register Success')</script>";
				}
				else
				{
					echo "FAILED";
				}
			}	
			include_once('signup.php');
			break;
			
			
			case '/signin':
			if(isset($_REQUEST['login']))
			{
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				
				$where=array("email"=>$email,"password"=>$enc_password);
				
				$run=$this->select_where('customer',$where);
				$chk=$run->num_rows; // all cond true or false by rows

				if($chk==1) // 1 means true
				{
					$fetch=$run->fetch_object(); //
					$cust_id=$fetch->cust_id;						
					$name=$fetch->name;	
					
					$_SESSION['cust_id']=$cust_id;
					$_SESSION['name']=$name;
					$_SESSION['email']=$email;
					echo "<script> alert('Login Successful'); 
					window.location='index';
					</script>";
					
				}
				else
				{
					echo "<script> alert('Login Failed'); 
					</script>";
				}
				
			}
			include_once('signin.php');
			break;
			
			
			
			case '/signout':
			unset($_SESSION['email']);
			unset($_SESSION['cust_id']);
			unset($_SESSION['name']); 	
			echo "<script> alert('Logout Success'); 
			window.location='index';
			</script>";
					
			break;
			
		}
	}
	
}
$obj=new control;

?>