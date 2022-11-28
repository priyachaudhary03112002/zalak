<?php

include_once('model.php');

class control extends model
{
	
	function __construct()
	{
		session_start();
		model::__construct(); 

		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			
			include_once('index.php');
			break;
			
			case '/add_category':
			if(isset($_REQUEST['submit']))
			{
				$cate_name=$_REQUEST['cate_name'];
			
				$data=array("cate_name"=>$cate_name);
			
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
				
				
				if(isset($_REQUEST['submit']))
				{
					$cate_name=$_REQUEST['cate_name'];
									
					
						$data=array("cate_name"=>$cate_name);
						$res=$this->update_where('category',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='manage_category';
							</script>";
						}
						else
						{
							echo "
							<script> alert('Update Failed');
							window.location='edit_category';
							</script>";
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
			
			case '/add_book':
			$category=$this->select('category');

			if(isset($_REQUEST['submit']))
			{
				$book_name=$_REQUEST['book_name'];
				$author=$_REQUEST['author'];
				$qty=$_REQUEST['qty'];
				$price=$_REQUEST['price'];
				$rack_no=$_REQUEST['rack_no'];
				
				$cate_id=$_REQUEST['cate_id'];
				
			
				$data=array("book_name"=>$book_name, "author"=>$author, "qty"=>$qty, "price"=>$price, "rack_no"=>$rack_no, "cate_id"=>$cate_id);
			
				$res=$this->insert('book',$data);

				if($res)
				{
					echo "<script> alert('Insert Success')</script>";
				}
				else
				{
					echo "FAILED";
				}
			}
			include_once('add_book.php');
			break;

			case '/edit_book':
			$category=$this->select('category');
			if(isset($_REQUEST['btnbook_id']))
			{
				$book_id=$_REQUEST['btnbook_id'];
				$where=array('book_id'=>$book_id);
				$run=$this->select_where('book',$where);
				$fetch=$run->fetch_object();
				
				
				if(isset($_REQUEST['submit']))
				{
					$book_name=$_REQUEST['book_name'];
					$author=$_REQUEST['author'];
					$qty=$_REQUEST['qty'];
					$price=$_REQUEST['price'];
					$rack_no=$_REQUEST['rack_no'];

					$cate_id=$_REQUEST['cate_id'];
					
									
					
						$data=array("book_name"=>$book_name, "author"=>$author, "qty"=>$qty, "price"=>$price, "rack_no"=>$rack_no, "cate_id"=>$cate_id);
						$res=$this->update_where('book',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='manage_book';
							</script>";
						}
						else
						{
							echo "
							<script> alert('Update Failed');
							window.location='edit_book';
							</script>";
						}	
										
				}
				
			}
			include_once('edit_book.php');
			break;
			
			case '/manage_book':
			$book_arr=$this->select_join2('book','category','book.cate_id=category.cate_id');
			include_once('manage_book.php');
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

			if(isset($_REQUEST['delbook_id']))
			{
				$book_id=$_REQUEST['delbook_id'];
				$where=array("book_id"=>$book_id);

				$run=$this->delete_where('book',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_book';
					</script>";
				}	

			}
			break;

			case '/book_report':
			$book_arr=$this->select_join2('book','category','book.cate_id=category.cate_id');
			//print_r($product_arr);
			include_once('book_report.php');
			break;

			case '/profile':
			$where=array('a_id'=>$_SESSION['a_id']);
			$run=$this->select_where('admin',$where);
			$fetch=$run->fetch_object();
			include_once('profile.php');
			break;

			case '/edit_profile':
			
			if(isset($_REQUEST['btna_id']))
			{
				$a_id=$_REQUEST['btna_id'];
				$where=array('a_id'=>$a_id);
				$run=$this->select_where('admin',$where);
				$fetch=$run->fetch_object();
				
				$old_file=$fetch->image;
				
				if(isset($_REQUEST['submit']))
				{
					$first_name=$_REQUEST['first_name'];
					$last_name=$_REQUEST['last_name'];
					$mobile=$_REQUEST['mobile'];
					$email=$_REQUEST['email'];
					$gender=$_REQUEST['gender'];
					$language_arr=$_REQUEST['language'];
					$language=implode(",",$language_arr);
					$bio=$_REQUEST['bio'];
					
					$image=$_FILES['image']['name'];  // get only input type="file"
					$path='images/upload/'.$image;   // PATH
					$tmp_image=$_FILES['image']['tmp_name']; // GET DUPLICATE IMG
					move_uploaded_file($tmp_image,$path); // MOVE DUP IMG IN PATH
									
					if($_FILES['image']['size']>0)
					{
						$data=array("first_name"=>$first_name, "last_name"=>$last_name, "mobile"=>$mobile, "email"=>$email, "gender"=>$gender, "language"=>$language, "bio"=>$bio, "image"=>$image );
						$res=$this->update_where('admin',$data,$where);

						if($res)
						{
							unlink('images/upload/'.$old_file); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
						}
						else
						{
							echo "
							<script> alert('Update Failed');
							window.location='edit_profile';
							</script>";
						}	
					}
					else
					{
						$data=array("first_name"=>$first_name, "last_name"=>$last_name, "mobile"=>$mobile, "email"=>$email, "gender"=>$gender, "language"=>$language, "bio"=>$bio);
						$res=$this->update_where('admin',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
						}
						else
						{
							echo "
							<script> alert('Update Failed');
							window.location='edit_profile';
							</script>";
						}
					}	
										
				}
				
			}
			include_once('edit_profile.php');
			break;

			case '/login':
			if(isset($_REQUEST['login']))
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
					$a_id=$fetch->a_id;						
					$first_name=$fetch->first_name;
					$image=$fetch->image;	
					
					$_SESSION['a_id']=$a_id;
					$_SESSION['first_name']=$first_name;
					$_SESSION['image']=$image;
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
			if(isset($_REQUEST['register']))
			{
				$first_name=$_REQUEST['first_name'];
				$last_name=$_REQUEST['last_name'];
				$mobile=$_REQUEST['mobile'];
				$email=$_REQUEST['email'];
				$gender=$_REQUEST['gender'];
				$language_arr=$_REQUEST['language'];
				$language=implode(",",$language_arr);
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
							
				$data=array("first_name"=>$first_name,"last_name"=>$last_name, "mobile"=>$mobile, "gender"=>$gender,"language"=>$language,"email"=>$email,"password"=>$enc_password);
				
				
				$res=$this->insert('admin',$data);
				if($res)
				{
					echo "<script> alert('Registration Successful')
					window.location='login';
					</script>";
				}
				else
				{
					echo "Registration Failed";
				}
			}
			include_once('register.php');
			break;

			case '/change_password':

				if(isset($_REQUEST['change_password']))
				{
					$old_password=$_REQUEST['old_password'];
					$enc_old_password=md5($old_password);

					$a_id=$_SESSION['a_id'];
					$where=array("password"=>$enc_old_password,"a_id"=>$a_id);
					$run=$this->select_where('admin',$where);

				if($run)
				{					
					$new_password=$_REQUEST['new_password'];
					$enc_new_password=md5($new_password);

					$con_password=$_REQUEST['con_password'];
					$enc_con_password=md5($con_password);

					if($_REQUEST['new_password']===$_REQUEST['con_password'])
					{
					$data=array("password"=>$enc_con_password);
					$res=$this->update_where('admin',$data,$where);
						if($res)
						{
							echo "
							<script> alert('New Password Update Successful');
							window.location='index';
							</script>";
						}
					}
					else
					{
						echo "
							<script> alert('Re-Enter Password');
							window.location='change_password';
							</script>";
					}
				}
				else
				{
					echo "
							<script> alert('Re-Enter Password');
							window.location='change_password';
							</script>";
				}


			}
		
			include_once('change_password.php');
			break;
			
			
			case '/logout':
			unset($_SESSION['a_id']);
			unset($_SESSION['first_name']);
			unset($_SESSION['image']);
			unset($_SESSION['email']); 	
			echo "<script> alert('Logout Success'); 
			window.location='index';
			</script>";
					
			break;	
		}
	}	
}
$obj=new control;
?>