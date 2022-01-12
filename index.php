<!Doctype html>
<html>
	<head>
		<title>Ceol</title>
		<meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
        <!-- <link rel="stylesheet" href="assets/css/style-complete.css"/> -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

		<link rel="shortcut icon" type="image/png" href="https://www.pinclipart.com/picdir/middle/24-247211_rejected-stamp-clipart-guitar-cartoon-guitar-transparent-background.png"> 
    <style type="text/css">
      body {
    font-family: "Lato", sans-serif;
}
.main-head{
    height: 150px;
    background: #FFF;   
}
.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}
.main {
    padding: 0px 10px;
}
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}
@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }
    .register-form{
        margin-top: 10%;
    }
}
@media screen and (min-width: 768px){
    .main{
        margin-left: 48%; 
    }
    .sidenav{
        width: 45%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 16%;
    }

    .register-form{
        margin-top: 20%;
    }
}
.login-main-text{
    margin-top: 16%;
    padding: 60px;
    color: #fff;
}
.login-main-text h2{
    font-weight: 300;
}
.btn-primary{
    background-color: #3e96f4 !important;
    color: #fff;
}
    </style>
	</head>
   
<body>

<nav class="navbar navbar-dark" style="background-color: #393f45;">
  <p>&nbsp;</p>
</nav>
<div class="sidenav" style="background:url('https://media.pitchfork.com/photos/5d31de0c9e99e60008b9e5c3/16:9/w_1696,h_954,c_limit/Nirvana.png');">
         <div class="login-main-text">
            <h2>Ceol</h2>
            <p>Welcome to the world of Artists</p>
         </div>
      </div>
      <div class="main">

         <div class="col-md-8 col-sm-8">
            <div class="login-form">
               <form>
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <a href="http://localhost/phpmyadmin/Ceol/home.php"><button class="btn btn-info"><a href="http://localhost/phpmyadmin/Ceol/home.php" style="text-decoration: none; color: white;">Login</a></button></a>
                  <br>
                  <br>
                  <br>
                  <P>Don't have an account?</P><p> Sign-up here </p>
                
               </form>
                 <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Register</button>
                    <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign Up here</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
               <form>
                <div class="form-group">
                     <label>Name</label>
                     <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                  <div class="form-group">
                     <label>Age</label>
                     <input type="number" class="form-control" placeholder="Your Age">
                  </div>
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name">
                  </div>
                  <div class="row">
                      <div class="col">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Country">
                      </div>
                      <div class="col">
                        <label>State</label>
                        <input type="text" class="form-control" placeholder="State">
                      </div>
                      <div class="col">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City">
                      </div>
                    </div>
                    <br>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
                
               </form>
               <br>
               <a href="http://localhost/phpmyadmin/Ceol/home.php"><center><button class="btn btn-primary">Sign Up</button></center></a>
        </div>
      
      </div>
    </div></div>
            </div>
         </div>
      </div>
      <nav class="navbar fixed-bottom navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/phpmyadmin/Ceol/about_us.php" style="color:white;">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/phpmyadmin/Ceol/contact_us.php" style="color:white;">Contact and Support</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        &#169; Jasjit and Jyotik
      </li>
    </ul>
  </div>
  </nav>
</body>
</html>
