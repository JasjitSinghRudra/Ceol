<?php 
 
  
    include 'core/init.php' ;
    
    if (isset($_SESSION['user_id'])) {
      header('location: home.php');
    }
   
?>

<html>
	<head>
		<title>Ceol</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
        <!-- <link rel="stylesheet" href="assets/css/style-complete.css"/> -->
        <link rel="stylesheet" href="assets/css/index_style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

		<link rel="shortcut icon" type="image/png" href="https://cdn-icons.flaticon.com/png/512/461/premium/461146.png?token=exp=1639386067~hmac=226052811f9712abd43effaba8ddbad6"> 
	</head>
    <nav class="navbar navbar-light" style="background-color: #da5775;">
        <a class="navbar-brand" href="#">
          Ceol
      </a>
    </nav>
<body>
<?php include 'includes/login.php';  ?>

<section class="sign-card">
  
  <div class="container">  
  If you havent created an account then create one now!
  <hr>
<button type="button" id="auto" onclick="" class="signup-btn pri-btn" data-toggle="modal" data-target="#exampleModalCenter">
                    Sign Up</button>
                   
  </div>
  </section>                    
                    <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <h5 style="font-weight: 700;" class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
            
 <?php  include 'includes/signup-form.php' ?>
</div>
</div>
</div>
</div>
  

	<div class="container-2">
   Welcome to the world of Artists
   <div class="feat">
   <ol>
    <li>You can have great conversations with fellow artists!</li>
    <li>No registration Fees, just fun</li>
    <li>Connect and make music ! <li>
  </div> 
  </ol>
  </div>	
		

            <footer>
                <ol>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Status</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li>© 2021 Jasjit And Jyotik</li>
                </ol>
            </footer>
        </main>
        
        <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/mine.js"></script>
</body>
</html>
