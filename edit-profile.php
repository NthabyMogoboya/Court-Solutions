<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
             integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body style= "background-color:grey;" >
<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class=" border-right" id="sidebar-wrapper">
  <div class="sidebar-heading"><h4>Crime Acts Solution</h4></div>
  <div class="list-group list-group-flush">
    <a href="victim_dashboard.php" class="list-group-item list-group-item-action">Dashboard</a>
    <a href="crime.php" class="list-group-item list-group-item-action">Crime Categories</a>
   <a href="/victimprofile.php" class="list-group-item list-group-item-action">Profile</a>
    <a href="#" class="list-group-item list-group-item-action">Status</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg nav border-bottom">
      <!-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
 <div >

    <div class="container-fluid">
     <br>
      <main role="main" class="container">        
        <h3>Update Profile Information</h3> 
         <form method="post" action="update-profile-action.php?user=<?php echo $user_data['username'] ?>">     
               <label>Name:</label><br> 
          <input type="text" name="fullname" value=" " /><br> 
          <label>Age:</label><br>
          <input type="text" name="age" value=" " /><br> 
          <label>Gender:</label><br> 
          <input type="text" name="gender" value=" " /><br>
          <label>Address:</label><br>          
          <input type="text" name="address" value=" " /><br><br>  

          

          <a class="btn btn-lg btn-primary" href="victimprofile.php" role="button">Update Profil»</a>
          
     </div> 
</div>          
       </form> 
</div>  


</html> 
