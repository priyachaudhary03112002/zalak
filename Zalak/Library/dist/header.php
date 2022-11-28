<?php
if(isset($_SESSION['a_id']))
{
  
}
else
{
  echo "<script> window.location='login'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Library Management System</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit" name="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
              
          </div>
        </form>


        <ul class="navbar-nav navbar-right">
          
          
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="images/upload/<?php echo $_SESSION['image'] ?>" class="rounded-circle mr-1"> 
           
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $_SESSION['first_name'] ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              
              <a href="profile" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              
              <div class="dropdown-divider"></div>
              <a href="logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index">Library</a>
          </div>
          
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="index"><i class="fas fa-fire"></i><span>Dashboard</span></a> 
            </li>
                        
            <li class="menu-header">Library Management</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown">
                <i class="fas fa-th-large"></i>
                <span>Category</span>
              </a>
              <ul class="dropdown-menu">                
                <li><a class="nav-link" href="add_category">Add Category</a></li>
                <li><a class="nav-link" href="manage_category">Manage Category</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown">
                <i class="far fa-file-alt"></i> 
                <span>Books</span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="add_book">Add Books</a></li>
                <li><a class="nav-link" href="manage_book">Manage Books</a></li>
              </ul>
            </li> 

            <li class="menu-header">Report</li>
            <li class="dropdown">
              <a href="book_report"><i class="fas fa-book"></i><span>Book Report</span></a> 
            </li>       
            
          </ul>
        </aside>
      </div>
