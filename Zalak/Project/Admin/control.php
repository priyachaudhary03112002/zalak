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
			case '/':
			include_once('index.php');
			break;

			case '/index':
			include_once('index.php');
			break;
			
			case '/add_category':
			if(isset($_REQUEST['submit']))
			{
				$cate_name=$_REQUEST['cate_name'];
				$cate_img=$_REQUEST['cate_img'];
				
				$cate_img=$_FILES['cate_img']['name'];  // get only input type="file"
				$path='images/upload/'.$cate_img;   // PATH
				$tmp_image=$_FILES['cate_img']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_image,$path); // MOVE DUP IMG IN PATH
				
				$data=array("cate_name"=>$cate_name,"cate_img"=>$cate_img);
			
				$res=$this->insert('category',$data);

				if($res)
				{
					echo "<script> alert('Insert Success')</script>";
				}
				else
				{
					echo "FAILED";
				}
			}
			include_once('add_category.php');
			break;
			
			case '/edit_category':
			if(isset($_REQUEST['btncate_id']))
			{
				$cate_id=$_REQUEST['btncate_id'];
				$where=array('cate_id'=>$cate_id);
				$run=$this->select_where('category',$where);
				$fetch=$run->fetch_object();
				
				$old_file=$fetch->cate_img;
				
				if(isset($_REQUEST['submit']))
				{
					$cate_name=$_REQUEST['cate_name'];
					$cate_img=$_REQUEST['cate_img'];				
					
					$cate_img=$_FILES['cate_img']['name'];  // get only input type="file"
					$path='img/upload/'.$file;   // PATH
					$tmp_file=$_FILES['cate_img']['tmp_name']; // GET DUPLICATE IMG
					move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
					
					if($_FILES['cate_img']['size']>0)
					{
						$data=array("cate_name"=>$cate_name,"cate_img"=>$cate_img);
						$res=$this->update_where('category',$data,$where);
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
						$data=array("cate_name"=>$cate_name);
						$res=$this->update_where('category',$data,$where);
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
			
			include_once('edit_category.php');
			break;

			case '/manage_category':
			$category_arr=$this->select('category');
			//print_r($category_arr);
			include_once('manage_category.php');
			break;
			
			case '/add_product':
			if(isset($_REQUEST['submit']))
			{
				$prod_name=$_REQUEST['prod_name'];
				$prod_mainprice=$_REQUEST['prod_mainprice'];
				$prod_discount=$_REQUEST['prod_discount'];
				$prod_img=$_REQUEST['prod_img'];
				$prod_description=$_REQUEST['prod_description'];
				
				$prod_img=$_FILES['prod_img']['name'];  // get only input type="file"
				$path='images/upload/'.$prod_img;   // PATH
				$tmp_image=$_FILES['prod_img']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_image,$path); // MOVE DUP IMG IN PATH
				
				$data=array("prod_name"=>$prod_name,"prod_mainprice"=>$prod_mainprice, "prod_discount"=>$prod_discount, "prod_discount"=>$prod_discount, "prod_img"=>$prod_img, "prod_description"=>$prod_description);
			
				$res=$this->insert('product',$data);

				if($res)
				{
					echo "<script> alert('Insert Success')</script>";
				}
				else
				{
					echo "FAILED";
				}
			}
			include_once('add_product.php');
			break;
			
			case '/manage_product':
			$product_arr=$this->select('product');
			//print_r($product_arr);
			include_once('manage_product.php');
			break;

			case '/add_doctor':
			include_once('add_doctor.php');
			break;
			
			case '/manage_doctor':
			$doctor_arr=$this->select('doctor');
			//print_r($doctor_arr);
			include_once('manage_doctor.php');
			break;
			
			case '/add_blog':
			include_once('add_blog.php');
			break;
			
			case '/manage_blog':
			$blog_arr=$this->select('blog');
			//print_r($blog_arr);
			include_once('manage_blog.php');
			break;

			case '/customer_report':
			$customer_arr=$this->select('customer');
			//print_r($customer_arr);
			include_once('customer_report.php');
			break;

			case '/cart_report':
			$cart_arr=$this->select('cart');
			//print_r($cart_arr);
			include_once('cart_report.php');
			break;
			
			case '/order_report':
			$order_arr=$this->select('order');
			//print_r($order_arr);
			include_once('order_report.php');
			break;

			case '/labtest_report':
			$labtest_arr=$this->select('labtest');
			//print_r($labtest_arr);
			include_once('labtest_report.php');
			break;

			case '/contact_report':
			$contact_arr=$this->select('contact');
			//print_r($contact_arr);
			include_once('contact_report.php');
			break;

			case '/login':
			if(isset($_REQUEST['adminlogin']))
			{
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				
				$where=array("email"=>$email,"password"=>$enc_password);
				
				$run=$this->select_where('admin',$where);
				$chk=$run->num_rows; // all cond true or false by rows

				if($chk==1) // 1 means true
				{
					$fetch=$run->fetch_object(); //
					$admin_id=$fetch->admin_id;						
					//$name=$fetch->name;	
					
					//$_SESSION['admin_id']=$admin_id;
					//$_SESSION['name']=$name;
					//$_SESSION['email']=$email;
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
			include_once('login.php');
			break;

			case '/register':
			if(isset($_REQUEST['adminsignup']))
			{
				$user_name=$_REQUEST['user_name'];
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
							
				$data=array("user_name"=>$user_name,"email"=>$email,"password"=>$enc_password);
				
				
				$res=$this->insert('admin',$data);
				if($res)
				{
					echo "<script> alert('register Success')
					window.location='login';
					</script>";
				}
				else
				{
					echo "FAILED";
				}
			}
			include_once('register.php');
			break;
			
			case '/delete':
				
			if(isset($_REQUEST['delcate_id']))
			{
				$cate_id=$_REQUEST['delcate_id'];
				$where=array("cate_id"=>$cate_id);

				$run=$this->delete_where('category',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_category';
					</script>";
				}	

			}
			break;
			
			case '/adminlogout':
			
			break;	
		}
	}	
}
$obj=new control;
?>